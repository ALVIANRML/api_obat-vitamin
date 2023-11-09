<?php

namespace App\Http\Controllers\Penyakit;

use App\Http\Controllers\Controller;
use App\Models\gejala;
use App\Models\penyakit;
use Illuminate\Http\Request;

class ConfirmPenyakit extends Controller
{
    public function bronkritis()
    {
    $bronkritis = penyakit::where('id_penyakit','P01')->first();
        if($bronkritis)
        {
            $gejalabronkritis = gejala::where('id_gejala','G02'&&'id_gejala','G32'&&'id_gejala','G33'&&'id_gejala','G36'&&'id_gejala','G27'&&'id_gejala','G39'&&'id_gejala','G29');if ($gejalabronkritis)
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
    public function tetanus ()
    {
    $tetanus = penyakit::where('id_penyakit','P01')->first();
        if($tetanus)
        {
            $tetanusgejala = gejala::where('id_gejala','G02'&&'id_gejala','G32'&&'id_gejala','G33'&&'id_gejala','G08'&&'id_gejala','G27'&&'id_gejala','G37'&&'id_gejala','G38'&&'id_gejala','G38'&&'id_gejala','G38');
            if ($tetanusgejala)
            {
            return response()->json(array(

            'message' => 'Gejala ditemukan',
            'code' => 200,
            'status'=>'found'

            ));
            }
            return response()->json(array(

                'message' => 'Gejala ditemukan',
                'code' => 404,
                'status'=>'not found'
            ));
        }
        return response()->json(array(

            'message' => 'penyakit ditemukan',
            'code' => 404,
            'status'=>'not found'
        ));
    }
}
