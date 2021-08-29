<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('homepage')->with(['error'=>'Loi dang nhap', 'message'=>'Ten tk hoac mk khong chinh xac!']);
    }

    // public function hello() {
    //     return view('welcome');
    // }
}
