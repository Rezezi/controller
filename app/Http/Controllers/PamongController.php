<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PamongController extends Controller
{
    public function index()
    {
        return view('daftarpamong'); // Mengembalikan view tanpa namespace folder
    }
}
