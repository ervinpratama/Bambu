<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class CustomerDashboardController extends Controller
{
    public function index() 
    {
        $barang = Barang::all();
        $kategori = Kategori::all();

        return view("customer.index", ["barang" => $barang, "kategori" => $kategori ]);
    }

    public function detail(Barang $barang) 
    {
        return view("customer.details", ['barang' => $barang]);
    }

    public function category(Kategori $kategori) 
    {
        return view("customer.category", [
            "kategori" => $kategori->nama,
            "barang" => $kategori->barang
        ]);
    }
}
