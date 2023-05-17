<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        return view("landing.index", ['barang' => $barang]);
    }
}
