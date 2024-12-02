<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    // Controller
    public function index()
    {
        // Ambil semua file gambar dari direktori public/images
        $images = File::files(public_path('assets/images'));

        // Kirim URL gambar ke view
        $imagePaths = array_map(function ($file) {
            return asset('assets/images' . $file->getFilename());
        }, $images);

        return view('home', compact('imagePaths'));
    }

}
