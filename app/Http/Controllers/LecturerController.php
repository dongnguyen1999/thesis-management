<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HockyNienkhoa;
use App\Models\DkGiangvien;
use App\Models\NguoiDung;
use App\Models\DkDeTai;
use App\Models\DeTai;
use App\Models\DsDeTai;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

class LecturerController extends Controller
{

    /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('requireLogin');
        $this->middleware('requireLecturer');
    }

    public function lecturers(Request $request) {
        return view('project.lecturers');
    }

    public function dsdetai(Request $request) {
        $user = $request->session()->get('user');

        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        $dsdt = DsDeTai::where('hknk_id', '=', $hkhientai->hknk_id)->get();

        $dsdetai = $dsdt->filter(fn($dthk) => $dthk->de_tai->nd_radt_id == $user->nd_id)->map(fn($dthk) => $dthk->de_tai)->values();

        return view('project.dsdetai')->with(['dsdetai' => $dsdetai, 'backUrl' => '/lecturers']);
    }

    public function xoadetai(Request $request) {
        $user = $request->session()->get('user');
        $dt_id = $request->route('dt_id');
        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        if ($dt_id) {
            $detai = DeTai::find($dt_id);
            DsDeTai::where('dt_id', '=', $dt_id)->where('hknk_id', '=', $hkhientai->hknk_id)->delete();

            $tendt = $detai->dt_ten;

            $tenhk = mb_strtolower($hkhientai->hknk_ten);

            return redirect('/lecturers/dsdetai')->with(['success' => 'Xóa thành công', 'message' => "Đã xóa đề tài $tendt khỏi danh sách đề tài $tenhk"]);

        }

        return redirect('/not-found');
    }

    public function themdetai() {
        return view('project.themdetai');
    }

    public function suadetai(Request $request) {
        $dt_id = $request->route('dt_id');

        if ($dt_id) {
            $detai = DeTai::find($dt_id);
            return view('project.themdetai')->with('detai', $detai);
        }

        return redirect('/not-found');

    }

    public function xulythemdetai(Request $request) {
        $user = $request->session()->get('user');
        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        $dt_id = $request->input('dt_id');

        if ($dt_id) {
            try {

                DeTai::where('dt_id', $dt_id)
                    ->update([
                    'dt_ma'       => $request->input('dt_ma'),
                    'dt_ten'      => $request->input('dt_ten'),
                    'dt_mota'    => $request->input('dt_mota'),
                ]);

            } catch (Exception $e) {
                return view('project.themdetai')->with(['error' => 'Lỗi sửa đề tài', 'message' => 'Không tồn tại mã đề tài này']);
            }

        } else {
            try {

                $id = DB::table('de_tai')->insertGetId([
                    'nd_radt_id' => $user->nd_id,
                    'dt_ma'       => $request->input('dt_ma'),
                    'dt_ten'      => $request->input('dt_ten'),
                    'dt_mota'    => $request->input('dt_mota'),
                ]);

                DB::table('ds_de_tai')->insert([
                    'hknk_id' => $hkhientai->hknk_id,
                    'dt_id'       => $id,
                ]);

            } catch (Exception $e) {
                return view('project.themdetai')->with(['error' => 'Lỗi thêm đề tài', 'message' => 'Thêm đề tài không thành công! Vui lòng thử lại sau']);
            }
        }

        return redirect('/lecturers/dsdetai');

    }

    public function dssinhviendangky(Request $request) {
        $user = $request->session()->get('user');

        $hkhientai = HockyNienkhoa::whereDate('hknk_batdau', '<=', Carbon::today())->whereDate('hknk_ketthuc', '>=', Carbon::today())->first();

        $dsSvDk = DkGiangvien::where('nd_gv_id', '=', $user->nd_id)
            ->where('hknk_id', '=', $hkhientai->hknk_id)
            ->get();


        $dsSvDk = $dsSvDk->map(function ($dangky) use ($hkhientai) {
            $sinhvien = $dangky->sv_dang_ky;
            $dkdt = DkDeTai::where('nd_dkdt_id', '=', $sinhvien->nd_id)
                ->where('hknk_id', '=', $hkhientai->hknk_id)
                ->first();

            if ($dkdt) {
                $sinhvien->de_tai = $dkdt->de_tai;
            }

            return $sinhvien;
        })->values();


        return view('project.dssinhviendangky')->with('dssinhvien', $dsSvDk);
    }

}
