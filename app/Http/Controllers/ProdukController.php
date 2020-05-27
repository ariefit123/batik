<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $barang = Barang::where('id', $id)->first();
        return view ('produk.index', compact('barang'));
    }
}
