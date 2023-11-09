<?php

namespace App\Http\Controllers\Penyakit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = penyakit::get();
        return penyakitResource::collection($penyakit);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
            [
                'nama'          =>'required',
                'penyebab'     =>'required',
                'pengobatan'     =>'required',
                'obat_vitamin_id' =>'required',
                'gejala_id'      => 'nullable'
            ]);
            $add = penyakit::create(
                [
                    'nama'      => $request->nama,
                    'penyebab' => $request->penyebab,
                    'pengobatan'      => $request->pengobatan,
                    'obat_vitamin_id'   => null,
                    'penyakit_id'      =>null,

                ]);
                return $add;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penyakitexisted = penyakit::where('id',$id)->first();
        if ($penyakitexisted)
        {
            return response()->json(array(
                'message'   => 'Penyakit: ',
                'status'    => 'success',
                'code'      => 200,
                'Data'      => $obatvitaminexisted,
            ));
        }
        return response()->json(array(
            'message'       =>'Penyakit tidak ditemukan',
            'status'        =>'not found',
            'code'          => 404,
        ));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penyakitexisted = penyakit::where('id',$id)->first();
                if($penyakitexisted)
                {
                    $obatvitaminexisted -> update([
                    'nama' => $request -> nama ?? $penyakitexisted -> nama,
                    'penyebab' => $request -> penyebab ?? $penyakitexisted -> penyebab,
                    'pengobatan' => $request -> pengobatan ?? $penyakitexisted -> pengobatan,
                    'obat_vitamin_id' => $request -> obat_dewasa ?? $penyakitexisted -> obat_dewasa,
                    'gejala_id' => $request -> gejala_id ?? $penyakitexisted -> gejala_id,

                ]);
                    return response()->json(array(
                    [   'success' => true,
                        'message' => 'Penyakit berhasil di update',
                        'code'    => 200,
                        'data'    => $penyakitexisted,
                    ]));
                }
                return response()->json(array(
                    [   'success'   => false,
                        'message'   => 'Penyakit tidak tersedia',
                        'code'      => 404,
                ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penyakitexisted = penyakit::where('id',$id)->first();
        if($penyakitexisted)
        {
            $penyakitexisted->delete();
            return response()->json(array(
                [
                    'success' => true,
                        'message' => 'Penyakit berhasil di hapus',
                        'code'    => 200,
                        'data'    => $penyakitexisted,
                ]
                ));
        }
       return response()->json(array( [
            'success'   => false,
                        'message'   => 'Penyakit tidak tersedia',
                        'code'      => 404,
       ]));
    }
}
