<?php

namespace App\Http\Controllers\Vitality;

use App\Models\gejala;
use App\Models\penyakit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class input_gejala_confirm_penyakit extends Controller
{
    public function bronkritis()
    {
    $bronkritis = penyakit::where('id_penyakit','P01')->first();
        if($bronkritis)
        {
            $gejalabronkritis = gejala::where('id_gejala','G02'||'id_gejala','G32'||'id_gejala','G33'||'id_gejala','G36'||'id_gejala','G27'||'id_gejala','G39'||'id_gejala','G29');if ($gejalabronkritis)
            {
            return response()->json(array(

            'message' => 'Gejala ditemukan',
            'code' => 200,
            'status'=>'found'

            ));
            }
            return response()->json(array(

                'message' => 'Gejala ditemukan',
                'code' => 200,
                'status'=>'found'
            ));
        }
    }
}
