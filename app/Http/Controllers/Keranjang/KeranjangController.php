<?php

namespace App\Http\Controllers\Keranjang;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\obatvitamin;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index($id)
    {
    $obatvitamin = obatvitamin::find($id);
    return view('keranjang', compact('obatvitamin'));
}
public function checkout(Request $request)
{
    // $obatvitamin = obatvitamin::find($id);
    // return view('checkout', compact('obatvitamin'));
    $request->request->add(['total_price' => max($request->quantity * 100000, 0.01), 'status' => 'unpaid']);
        $order = Keranjang  ::create($request->all());
        // Set your Merchant Server Key
\Midtrans\Config::$serverKey = config('midtrans.server_key');
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' => $order->id,
        'gross_amount' => max($order->total_price / 100, 1.00),
    ),
    'customer_details' => array(
        'name' => $request->name,
        'phone' => $request->phone,
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
return view('checkout',compact('snapToken','order'));
    }

    // public function payment($id)
    // {
    // $obatvitamin = obatvitamin::find($id);
    // return view('checkout', compact('obatvitamin'));
// }
}
