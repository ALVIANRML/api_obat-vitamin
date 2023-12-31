<?php

namespace App\Http\Controllers\Obatvitamin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Obatvitamin\Obatvitaminharga;
use App\Http\Resources\Obatvitamin\ObatvitaminResource;
use App\Models\Keranjang;
use App\Models\obatvitamin;
use Exception;
use Illuminate\Http\Request;

class ObatvitaminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obatvitamin = obatvitamin::query(); // Gunakan query() untuk memulai query builder

        if (request()->has('search')) {
            $obatvitamin->where('nama', 'like', '%' . request()->input('search') . '%');
        }

        $obatvitaminResults = $obatvitamin->get(); // Ambil hasil query

        return view('menu.obatvitamin', ['obatvitamin' => $obatvitaminResults]);
    }
    public function harga()
    {

        $obatvitamin = obatvitamin::query(); // Gunakan query() untuk memulai query builder

        if (request()->has('search')) {
            $obatvitamin->where('nama', 'like', '%' . request()->input('search') . '%');
        }

        $obatvitaminResults = $obatvitamin->get(); // Ambil hasil query

        return view('menu.pembelian', ['obatvitamin' => $obatvitaminResults]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function quantity(Request $request)
    {
        $validatedData = $request->validate([
            'quantity'      => 'required',

        ]);
        Keranjang::create($validatedData);

        // $request->session()->flash('success', 'Registrasi berhasil. Silahkan login');
        return redirect('keranjang{id}')->with('success', 'berhasil ditambahkan');
        return redirect('/keranjang{id}');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $obatvitaminexisted = obatvitamin::where('id',$id)->first();
        if ($obatvitaminexisted)
        {
            return response()->json(array(
                'message'   => 'Obat atau vitamin tersedia',
                'status'    => 'success',
                'code'      => 200,
                'Data'      => $obatvitaminexisted,
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
        $obatvitaminexisted = obatvitamin::where('id',$id)->first();
                if($obatvitaminexisted)
                {
                    $obatvitaminexisted -> update([
                    'nama' => $request -> nama ?? $obatvitaminexisted -> nama,
                    'deskripsi' => $request -> deskripsi ?? $obatvitaminexisted -> deskripsi,
                    'obat_dewasa' => $request -> obat_dewasa ?? $obatvitaminexisted -> obat_dewasa,
                    'harga' => $request -> harga ?? $obatvitaminexisted -> harga,

                ]);
                    return response()->json(array(
                    [   'success' => true,
                        'message' => 'obat atau vitamin berhasil di update',
                        'code'    => 200,
                        'data'    => $obatvitaminexisted,
                    ]));
                }
                return response()->json(array(
                    [   'success'   => false,
                        'message'   => 'Obat atau vitamin tidak tersedia',
                        'code'      => 404,
                ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obatvitaminexisted = obatvitamin::where('id',$id)->first();
        if($obatvitaminexisted)
        {
            $obatvitaminexisted->delete();
            return response()->json(array(
                [
                    'success' => true,
                        'message' => 'obat atau vitamin berhasil di hapus',
                        'code'    => 200,
                        'data'    => $obatvitaminexisted,
                ]
                ));
        }
       return response()->json(array( [
            'success'   => false,
                        'message'   => 'Obat atau vitamin tidak tersedia',
                        'code'      => 404,
       ]));
    }
}
