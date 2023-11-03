<?php

namespace App\Http\Controllers\Obatvitamin;

use App\Http\Controllers\Controller;
use App\Models\obatvitamin;
use App\Models\umur;
use Illuminate\Http\Request;

class Dosis_obatController extends Controller
{
    public function ConfirmObat()
    {
        // var_dump(20);
        // exit;
        $dosisdewasa = umur::where('umur' >= 'obat_dewasa')->get();

        $dosisanak = umur::where('umur' < 'obat_anak')->get();

        if('umur'>='obat_dewasa')
        {
            return response()->json(array(
            ['code' => 200,
            'data' => $dosisdewasa]));
        }
        else if ('umur'>='obat_anak')
        {
            return response()->json(array(
                ['code' => 200,
                'data' => $dosisanak]));
        }
        return response()->json(array(
            ['code' => 404,
            'data' => 'data tidak ditemukan']));
    }
}
