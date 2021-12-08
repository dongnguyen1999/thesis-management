<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
       $user = DB::table('nguoi_dung')
                ->where('nd_tentk', '=', $request->get('nd_tentk'))
                ->where('nd_password', '=', $request->get('nd_password'))
                ->first();

        print_r($user);
        if ($user) {
            $request->session()->put('isLoggedIn', true);
            $request->session()->put('user', $user);
            return redirect('/');
        }
        return view('project.login')->with(['error' => 'Lỗi đăng nhập', 'message' => 'Tên tài khoản hoặc mật khẩu không chính xác']);
    }

    public function postLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

}
