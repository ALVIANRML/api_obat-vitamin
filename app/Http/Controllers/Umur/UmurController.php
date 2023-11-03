<?php

namespace App\Http\Controllers\Umur;

use App\Http\Controllers\Controller;
use App\Http\Resources\Umur\UmurResource;
use App\Models\umur;
use Illuminate\Http\Request;

class UmurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umur = umur::get();
        return UmurResource::collection($umur);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // var_dump(20);
        //     exit;
        $request -> validate(
            [
                'umur_pengguna'  => 'required',
            ]);

            $add =umur::create(
                [
                    'umur_pengguna'  => $request->umur_pengguna,
                ]);
                return $add;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $umurexisted = umur::where('id',$id)->first();
        if ($umurexisted)
        {
            return response()->json(array(
                [
                'status'    => 'success',
                'code'      => 200,
                'Data'      => $umurexisted,
            ]));
        }
        return response()->json(array(
            [
            'status'        =>'not found',
            'code'          => 404,
        ]));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {
        $umurexisted = umur::where('id',$id)->first();
                if($umurexisted)
                {
                    $umurexisted -> update([
                    'umur_pengguna' => $request -> umur_pengguna ?? $umurexisted -> umur_pengguna,
                    ]);
                    return response()->json(array(
                    [   'success' => true,
                       'code'    => 200,
                        'data'    => $umurexisted,
                    ]));
                }
                return response()->json(array(
                    [   'success'   => false,
                        'code'      => 404,
                ]));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $umurexisted = umur::where('id',$id)->first();
        if($umurexisted)
        {
            $umurexisted->delete();
            return response()->json(array(
                [
                    'success' => true,
                        'message' => 'umur berhasil di hapus',
                        'code'    => 200,
                        'data'    => $umurexisted,
                ]
                ));
        }
       return response()->json(array( [
            'success'   => false,

            'code'      => 404,
       ]));
    }
    }

