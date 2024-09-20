<?php 

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Menampilkan halaman galeri
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    // Menampilkan form untuk upload gambar
    public function create()
    {
        return view('gallery.create');
    }

    // Menyimpan gambar ke database
    public function store(Request $request)
    {
        // Validasi file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

                // Simpan data ke database
                Gallery::create([
                    'image' => $imageName,
                ]);

                return redirect()->route('gallery.index')->with('success', 'Gambar berhasil diunggah');
            }
    
 
    // Menghapus gambar dari database dan folder
    public function destroy(Gallery $gallery)
    {
        $imagePath = public_path('gallery-images/' . $gallery->image);

        // Cek dan hapus file gambar
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        // Hapus data dari database
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gambar berhasil dihapus');
    }
}
