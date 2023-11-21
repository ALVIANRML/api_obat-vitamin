<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\User\UserResource;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function storeregister(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|max:100',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:3',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData('password'));
        User::create($validatedData);

        // $request->session()->flash('success', 'Registrasi berhasil. Silahkan login');
        return redirect('login')->with('success', 'Registrasi berhasil. Silahkan login');

        return redirect('/login');

    }



    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' =>'required|email:dns',
            'password'=>'required',
        ]);
        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/menu');
        }
        return back()->with('loginError', 'Periksa kembali email atau password anda!');

    }
}



