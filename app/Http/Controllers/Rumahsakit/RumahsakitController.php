<?php

namespace App\Http\Controllers\Rumahsakit;

use App\Http\Controllers\Controller;
use App\Models\Rumahsakit;
use Illuminate\Http\Request;

class RumahsakitController extends Controller
{
    public function index()
    {
        $rumahsakit = Rumahsakit::query(); // Gunakan query() untuk memulai query builder

        if (request()->has('search')) {
            $rumahsakit->where('nama', 'like', '%' . request()->input('search') . '%');
        }

        $rumahsakitResults = $rumahsakit->get(); // Ambil hasil query

        return view('menu.rumah_sakit', ['rumahsakit' => $rumahsakitResults]);
    }
}
