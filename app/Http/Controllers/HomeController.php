<?php

namespace App\Http\Controllers;

use App\Models\DkGiangvien;
use App\Models\NguoiDung;
use App\Models\DeTai;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index() {
        // return view('homepage')->with(['error'=>'Loi dang nhap', 'message'=>'Ten tk hoac mk khong chinh xac!']);
        return view('homepage');
    }

    public function login() {
        return view('project.login');
    }

    public function hello() {
        return 'hello';
    }

    public function permissionFail() {
        return view('project.permissionFail');
    }

}
