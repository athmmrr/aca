<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data news
        // sama dengan => Select * from news;
        $news = News::all();

        // Tampilkan halaman index berita dengan rows berita 
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan halaman create berita
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi, 3 field ini diperlukan
        // Jika ada yang kurang, di redirect ke halaman sebelumnya dengan error
        $validated = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);

        // Acak nama gambar
        // Alasan acak nama gambar agar tidak ada 2 gambar dengan nama yang sama
        $imageName = $request->file('image')->hashName();

        // Taruh nama gambar baru ke array validated untuk nanti disimpan ke database
        $validated['image'] = $imageName;
        
        // Simpan gambar di folder public/news dengan nama yang diacak tadi
        $newsDirectory = public_path() . '/news-images';
        $request->file('image')->move($newsDirectory, $imageName);
        
        // insert row baru di table news dengan data didalam validated
        News::create($validated);

        // Redirect ke halaman index
        return redirect()->route('news.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Search news dengan id yang sedang diedit
        $news = News::find($id);

        // Ke halaman edit dengan data news yang sedang diedit
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi, bahwa 3 field ini diperlukan
        // Jika ada yang kurang, di redirect ke halaman sebelumnya dengan error
        $validated = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);

        // Search news dengan id yang sedang diedit
        $news = News::find($id);

        // Hapus gambar lama
        File::delete(public_path() . "/news-images/$news->image");

        // Acak nama gambar
        // Alasan acak nama gambar agar tidak ada 2 gambar dengan nama yang sama
        $imageName = $request->file('image')->hashName();

        // Taruh nama gambar baru ke array validated untuk nanti disimpan ke database
        $validated['image'] = $imageName;
        
        // Simpan gambar di folder public/news dengan nama yang diacak tadi
        $newsDirectory = public_path() . '/news-images';
        $request->file('image')->move($newsDirectory, $imageName);
        
        // Update dengan baru yang ada didalam array validated
        $news->update($validated);

        // Redirect ke halaman index
        return redirect()->route('news.index')->with('success', 'Data berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Search news dengan id bersangkutan
        $news = News::find($id);

        // Hapus gambar lama
        File::delete(public_path() . "/news-images/$news->image");

        // Hapus row dari table News
        $news->delete();

        // Redirect ke halaman index
        return redirect()->route('news.index')->with('success', 'Data berhasil dihapus.');        
    }
}
