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
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:5',
        ]);
        if($validator->fails())
        {
            return response()->json(
            [
                'message'   => 'ada kesalahan',
                'success'    => false,
                'data'      => $validator->fails(),
                'code'      => 433,
            ]
            );
        }
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,bcrypt($request->password),
        ]);

        if($user)
        {
            return response()->json(
            [
                'message'           => 'Registrasi berhasil',
                'success'           => true,
                'code'              => 200,
                'data registrasi'   =>$user
            ],201 );
        }
            return response()->json(
                ['message'   => 'Registrasi gagal',
                'success'   => false,
                'code'      => 409]
            );
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'      => 'required',
            'password'  => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user)
        {
            return response()->json(
                [
                    'success'    => false,
                    'message'   => 'Pengguna tidak ditemukan',
                    'code'      => 404
                ]);
        }
        if (Hash::check($request->password, $user->password))
        {
            $token = $user ->createToken($user->id)->accessToken;
                return response()->json(
                    [
                        'success'    => true,
                        'message'   =>
                        [
                            'user'      => $user,
                            'token'     => $token
                        ]
                    ]);
        }
            else
            {
                return response()->json(
                    [
                        'message'   => 'Password atau email salah',
                        'success'   => false,
                        'status'    => 'not found',
                        'code'      => 404
                    ]);
            }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->delete();
        return response()->json(array(

            'message' => 'berhasil logout',
            'status success' => 'success',
            'code'  => 200

        ));
    }
    public function me(Request $request)
    {
        return response()->json(Auth::user());
    }

}



