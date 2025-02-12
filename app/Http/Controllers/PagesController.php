<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function services(Request $request)
    {
        $categories = Kategori::all();
        $services = Layanan::all();

        return view('services', compact('services', 'categories'));
    }
}
