<?php

namespace App\Http\Controllers\Gejala;

use App\Http\Controllers\Controller;
use App\Http\Resources\Gejala\GejalaResource;
use App\Models\gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gejala = gejala::get();
        return GejalaResource::collection($gejala);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate(
            [
                'nama'  =>'required',
                'id_gejala'=>'required',
            ]
            );
            $add = gejala::create(
                [
                    'nama' => $request->nama,
                    'id_gejala' => $request->gejala,
                ]
                );
                return $add;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gejalaexisted = gejala::where('id',$id)->first();
        if($gejalaexisted){
            return response()->json(array(
                'message' => 'Gejala ditemukan',
                'status'   => 'found',
                'code'  => 200,
                'data'  => $gejalaexisted,
            ));
        }
        return response()->json(array(
            'message' => 'Gejala tidak ditemukan',
            'status'    => 'not found',
            'code'      => 404,
        ));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gejalaexisted = gejala::where('id',$id)->first();
        if($gejalaexisted){
            $gejalaexisted -> update([
                'nama'=>$request->nama ?? $gejalaexisted ->nama,
                'id_gejala'=>$request->id_gejala ?? $gejalaexisted ->id_gejala
            ]);
            return response()->json(array(
                [   'success' => true,
                    'message' => 'gejala berhasil di update',
                    'code'    => 200,
                    'data'    => $gejalaexisted,
            ]));
        }
        return response()->json(array(
            [   'success'   => false,
                'message'   => 'Gejala tidak tersedia',
                'code'      => 404,
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gejalaexisted = gejala::where('id',$id)->first();
        if($gejalaexisted)
        {
            $gejalaexisted->delete();
            return response()->json(array(
                [
                    'success' => true,
                        'message' => 'gejala berhasil di hapus',
                        'code'    => 200,
                        'data'    => $gejalaexisted,
                ]
                ));
        }
       return response()->json(array( [
            'success'   => false,
                        'message'   => 'gejala tidak tersedia',
                        'code'      => 404,
       ]));
    }
}
