<?php

namespace App\Http\Controllers;

use App\Models\DeTai;
use App\Models\DkDeTai;
use App\Models\DkGiangvien;
use App\Models\DsDeTai;
use App\Models\HockyNienkhoa;
use App\Models\NguoiDung;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('requireLogin');
        $this->middleware('requireStudent');
    }

    public function student(Request $request) {
        $user = $request->session()->get('user');
        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();
        $giangvien = null;
        $detai = null;
        $diem = null;

        $dkgv = DkGiangvien::where('nd_sv_id', '=', $user->nd_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->first();

        if ($dkgv) {
            $giangvien = $dkgv->gv_huong_dan;
        }

        $dkdt = DkDeTai::where('nd_dkdt_id', '=', $user->nd_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->first();

        if ($dkdt) {
            $detai = $dkdt->de_tai;
            $diem = $dkdt->dkdt_tongdiem;
        }

        return view('project.student')->with(['giangvien' => $giangvien, 'detai' => $detai, 'diem' => $diem]);
    }

    public function dsgiangvienhuongdan(Request $request) {
        $user = $request->session()->get('user');
        $dsnguoidung = NguoiDung::all();
        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        $dsgiangvien = $dsnguoidung->filter(fn ($nguoidung) => $nguoidung->vai_tro->vt_ma == 'GIANG_VIEN')
            ->map(function ($nguoidung) use ($hkhientai, $user) {
                $dk = DkGiangvien::where('nd_sv_id', '=', $user->nd_id)
                    ->where('nd_gv_id', '=', $nguoidung->nd_id)
                    ->where('hknk_id', '=', $hkhientai->hknk_id)
                    ->first();

                if ($dk) {
                    $nguoidung->dangky = true;
                }

                return $nguoidung;
            })
            ->values();

        return view('project.dsgiangvien')->with('dsgiangvien', $dsgiangvien);
    }

    public function dkgiangvien(Request $request) {
        $user = $request->session()->get('user');
        $gv_id = $request->route('nd_id');
        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        DkGiangvien::where('nd_sv_id', '=', $user->nd_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->delete();

        DkDeTai::where('nd_dkdt_id', '=', $user->nd_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->delete();


        $giangvien = NguoiDung::find($gv_id);

        if ($giangvien) {
            DB::table('dk_giangvien')->insert([
                'hknk_id' => $hkhientai->hknk_id,
                'nd_sv_id' => $user->nd_id,
                'nd_gv_id' => $giangvien->nd_id,
                'dkgv_thgiandk' => Carbon::now(),
            ]);

            $tengv = $giangvien->nd_ten;

            return redirect('/student/dsgiangvienhuongdan')->with(['success' => 'Đăng ký thành công', 'message' => "Đã đăng ký làm luận văn với giảng viên $tengv"]);

        }

        return redirect('/not-found');
    }

    public function huydkgiangvien(Request $request) {
        $user = $request->session()->get('user');
        $gv_id = $request->route('nd_id');
        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        $dk = DkGiangvien::where('nd_sv_id', '=', $user->nd_id)
            ->where('nd_gv_id', '=', $gv_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->first();

        if ($dk) {
            DkGiangvien::where('nd_sv_id', '=', $user->nd_id)
                ->where('nd_gv_id', '=', $gv_id)
                ->where('hknk_id', '=', $hkhientai->hknk_id)
                ->delete();
            echo $dk;
            $tengv = NguoiDung::find($dk->nd_gv_id)->nd_ten;
            return redirect('/student/dsgiangvienhuongdan')->with(['success' => 'Hủy thành công', 'message' => "Đã hủy đăng ký làm luận văn với giảng viên $tengv"]);
        }

        return redirect('/not-found');
    }

    public function dsdetai( Request $request){
        $user = $request->session()->get('user');

        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        $dk = DkGiangvien::where('nd_sv_id', '=', $user->nd_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->first();

        if ($dk) {
            $dsdt = DsDeTai::where('hknk_id', '=', $hkhientai->hknk_id)->get();
            $dsdetai = $dsdt->filter(fn($dthk) => $dthk->de_tai->nd_radt_id == $dk->nd_gv_id)
                ->map(function($dthk) use ($user, $hkhientai){
                $detai = $dthk->de_tai;
                $dk = DkDeTai::where('nd_dkdt_id', '=', $user->nd_id)
                    ->where('hknk_id', '=', $hkhientai->hknk_id)
                    ->where('dt_id', '=', $detai->dt_id)
                    ->first();

                if ($dk) {
                    $detai->dangky = true;
                }
                return $detai;
            })->values();
            return view('project.dsdetai')->with(['dsdetai' => $dsdetai, 'backUrl' => '/student']);
        } else {
            return view('project.dsdetai')->with(['chuadkgv' => true, 'backUrl' => '/student']);
        }

    }

    public function dkdetai( Request $request){
        $user = $request->session()->get('user');
        $dt_id = $request->route('dt_id');
        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        DkDeTai::where('nd_dkdt_id', '=', $user->nd_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->delete();


        $detai = DeTai::find($dt_id);

        if ($detai) {

            DB::table('dk_de_tai')->insert([
                'hknk_id' => $hkhientai->hknk_id,
                'nd_dkdt_id' => $user->nd_id,
                'dt_id' => $detai->dt_id,
                'dkdt_thgiandk' => Carbon::now(),
            ]);

            $tendt = $detai->dt_ten;

            return redirect('/student/dsdetai')->with(['success' => 'Đăng ký thành công', 'message' => "Đã đăng ký làm đề tài $tendt"]);

        }

        return redirect('/not-found');
    }

    public function huydkdetai( Request $request){

        $user = $request->session()->get('user');
        $dt_id = $request->route('dt_id');
        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        $dk = DkDeTai::where('nd_dkdt_id', '=', $user->nd_id)
            ->where('dt_id', '=', $dt_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->first();

        if ($dk) {
            DkDeTai::where('nd_dkdt_id', '=', $user->nd_id)
                ->where('dt_id', '=', $dt_id)
                ->where('hknk_id', '=', $hkhientai->hknk_id)
                ->delete();

            $tendt = DeTai::find($dk->dt_id)->dt_ten;
            return redirect('/student/dsdetai')->with(['success' => 'Hủy thành công', 'message' => "Đã hủy đăng ký làm đề tài $tendt"]);
        }

        return redirect('/not-found');

    }

}
