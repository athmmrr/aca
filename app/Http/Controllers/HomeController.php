<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function tentang() {
        return view('/tentang');
    }

    public function berita() {
        return view('/berita');
    }

    public function gallery() {
        return view('/gallery');
    }

    public function kontak() {
        return view('/kontak');
    }

    public function login() {
        return view('/login');
    }
}
