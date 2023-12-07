<?php

namespace App\Http\Controllers\Keranjang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index($id)
    {
    $obatvitamin = Obatvitamin::find($id);
    return view('keranjang', compact(obatvitamin));
}
}
