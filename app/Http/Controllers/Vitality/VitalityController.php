<?php

namespace App\Http\Controllers\Vitality;

use App\Http\Controllers\Controller;
use App\Http\Resources\Vitality\VitalityResource;
use App\Models\vitality;
use Illuminate\Http\Request;

class VitalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vitality = vitality::get();
        // return ObatvitaminResource::collection($obat_vitamin);
        return view('menu.pembelian', ['vitality'=> VitalityResource::collection($vitality)]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
            [
                'id_vitality'       =>'required',
                'obatvitamin_id'    =>'required',
                'penyakit_id'       =>'required',

            ]);
            $add = vitality::create(
                [
                    'obatvitamin_id'      => $request->obatvitamin_id,
                    'penyakit_id'      => $request->penyakit_id,


                ]);
                return $add;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vitalityexisted = vitality::where('id',$id)->first();
        if ($vitalityexisted)
        {
            return response()->json(array(
                'message'   => 'status: ',
                'status'    => 'success',
                'code'      => 200,
                'Data'      => $vitalityexisted,
            ));
        }
        return response()->json(array(
            'message'       =>'Status:',
            'status'        =>'not found',
            'code'          => 404,
        ));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vitalityexisted = vitality::where('id',$id)->first();
                if($vitalityexisted)
                {
                    $vitalityexisted -> update([
                    'obatvitamin_id' => $request -> obatvitamin_id ?? $vitalityexisted -> obatvitamin_id,
                    'penyakit_id' => $request -> penyakit_id ?? $vitalityexisted -> penyakit_id,


                ]);
                    return response()->json(array(
                    [   'success' => true,
                        'message' => 'vitality berhasil di update',
                        'code'    => 200,
                        'data'    => $vitalityexisted,
                    ]));
                }
                return response()->json(array(
                    [   'success'   => false,
                        'message'   => 'vitality tidak tersedia',
                        'code'      => 404,
                ]));
    }

                /**
                 * Remove the specified resource from storage.
                 */
                public function destroy(string $id)
                {
                    $vitalityexisted = vitality::where('id',$id)->first();
                    if($vitalityexisted)
                    {
                        $vitalityexisted->delete();
                        return response()->json(array(
                            [
                                'success' => true,
                                    'message' => 'vitality berhasil di hapus',
                                    'code'    => 200,
                                    'data'    => $vitalityexisted,
                            ]
                            ));
                    }
                return response()->json(array( [
                        'success'   => false,
                                    'message'   => 'vitality tidak tersedia',
                                    'code'      => 404,
                ]));
                }
}
