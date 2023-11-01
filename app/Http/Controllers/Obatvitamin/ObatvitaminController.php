<?php

namespace App\Http\Controllers\Obatvitamin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Obatvitamin\ObatvitaminResource;
use App\Models\obatvitamin;
use Illuminate\Http\Request;

class ObatvitaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obat_vitamin = obatvitamin::get();
        return ObatvitaminResource::collection($obat_vitamin);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate(
            [
                'nama'      =>'required',
                'deskripsi' =>'required',
                'umur'      =>'required',
            ]);
            $add = obatvitamin::create(
                [
                    'nama'      => $request->nama,
                    'deskripsi' => $request->deskripsi,
                    'umur'      => $request->umur,
                ]);
                return $add;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Obatvitamin = obatvitamin::where('id',$id)->first();
        if ($Obatvitamin)
        {
            return response()->json(array(
                'message'   => 'Obat atau vitamin tersedia',
                'status'    => 'success',
                'code'      => 200,
            ));
        }
        return response()->json(array(
            'message'       =>'Obat atau vitamin tidak ditemukan',
            'status'        =>'not found',
            'code'          => 404,
        ));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
