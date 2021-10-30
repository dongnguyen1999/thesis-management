<?php

namespace App\Http\Controllers;

use App\Models\DkGiangvien;
use App\Models\NguoiDung;
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
    public function student() {
        return view('project.student');
    }
    //post login
    public function postLogin(Request $request) {
        $mssv = $request->mssv ;
        $password = $request->password;

        if(Auth::attempt(['nd_ma' => $mssv, 'password' => $password])){
            // echo ' Đăng nhập  thành công ';
            return redirect('/');
        }
        else {
            echo 'danh nhap that bai ' ;

        }
        //sau khi dang nhap co the sử dung  // $request->user()-> (relationship de su dung nhu binh thuong) ;

    }

    // trong student
    public function dkluanvan() {
        $dsgiangvien = NguoiDung::where('nd_ma', 'like' , 'GV%' )->get();
        // dd($dsgiangvien);
        return view('project.dkluanvan')->with('dsgiangvien' , $dsgiangvien);
    }

    public function dkdetai( Request $request){

        $nd_id = $request->nd_id; //id giang vien

        $dsdetai = NguoiDung::find($nd_id)->de_tais;

        return view('project.dkdetai')
            ->with('dsdetai' , $dsdetai);
    }

    public function lecturers() {
        return view('project.lecturers');
    }
    public function dsdetai() {
        return view('project.dsdetai');
    }
    public function themdetai() {
        return view('project.themdetai');
    }
    public function suadetai() {
        return view('project.suadetai');
    }
    public function dssinhviendangky() {
        return view('project.dssinhviendangky');
    }






    // public function hello() {
    //     return view('welcome');
    // }
}
