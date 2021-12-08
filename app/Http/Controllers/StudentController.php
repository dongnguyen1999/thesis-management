<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('requireLogin');
    // }

    public function student() {
        return view('project.student');
    }

    // trong student
    public function dkluanvan() {
        //Review note:
        // insert VaiTro
        // 1, SINH_VIEN, Sinh viên
        // 2, GIANG_VIEN, Giảng viên
        // 3, ADMIN, Quản trị viên

        $dsnguoidung = NguoiDung::all();

        $dsgiangvien = $dsnguoidung->filter(function ($nguoidung) {
            return $nguoidung->vai_tro->vt_ma == 'GIANG_VIEN';
        })->values();

        // $danhsachmoi = $danhsach->filter(function ($phantu) {
        //     return $phantu->id == 1;
        // })->values();

        // print_r($dsgiangvien);

        // $dsgiangvien = NguoiDung::where('nd_ma', 'like' , 'GV%' )->get();

        // dd($dsgiangvien);
        return view('project.dkluanvan')->with('dsgiangvien' , $dsgiangvien);
    }

    public function dkdetai( Request $request){

        $nd_id = $request->nd_id; //id giang vien
        $dsdetai = NguoiDung::find($nd_id)->de_tais;

        return view('project.dkdetai')
            ->with('dsdetai' , $dsdetai);
    }

    public function dsgiangvienhuongdan() {
        return view('project.dsgiangvienhuongdan');
    }
}
