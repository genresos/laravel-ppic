<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function loginMasuk(Request $request)
    {
        $auth = Auth::attempt($request->only('username', 'password'));

        if($auth){
            return redirect()->route('dashboard-index');
        }

        return 'gagal login';

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-view');
    }
}
