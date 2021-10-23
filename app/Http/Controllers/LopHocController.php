<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LopHocController extends Controller
{
    public function listLopHoc()
    {
    }
    public function findLopHoc($id)
    {

        $lophoc = LopHoc::find(3);
        // print_r($nganh->toArray());
        $khoahoc = $lophoc->khoaHoc;

        $dslh = LopHoc::all();

        // do model xuong view
        return view('project.login')->with(['lop' => $lophoc, 'khoahoc' => $khoahoc, 'dslh' => $dslh]);
    }
}
