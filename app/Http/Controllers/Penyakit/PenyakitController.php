<?php

namespace App\Http\Controllers\Penyakit;

use App\Models\penyakit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Penyakit\PenyakitResource;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakit = penyakit::query(); // Gunakan query() untuk memulai query builder

        if (request()->has('search')) {
            $penyakit->where('nama', 'like', '%' . request()->input('search') . '%');
        }

        $penyakitResults = $penyakit->get(); // Ambil hasil query

        return view('menu.penyakit', ['penyakit' => $penyakitResults]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
            [
                'id_penyakit'   =>'required',
                'nama'          =>'required',
                'penyebab'     =>'required',
                'pengobatan'     =>'required',
                'gejala'     =>'required',

            ]);
            $add = penyakit::create(
                [
                    'id_penyakit'      => $request->id_penyakit,
                    'nama'      => $request->nama,
                    'penyebab' => $request->penyebab,
                    'pengobatan'      => $request->pengobatan,
                    'gejala'      => $request->gejala,
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
                'Data'      => $penyakitexisted,
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
                    $penyakitexisted -> update([
                    'nama' => $request -> nama ?? $penyakitexisted -> nama,
                    'id_penyakit' => $request -> id_penyakit ?? $penyakitexisted -> id_penyakit,
                    'penyebab' => $request -> penyebab ?? $penyakitexisted -> penyebab,
                    'pengobatan' => $request -> pengobatan ?? $penyakitexisted -> pengobatan,
                    'gejala' => $request -> gejala ?? $penyakitexisted -> gejala,



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
