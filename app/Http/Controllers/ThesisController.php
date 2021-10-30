<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\BoMon;
use App\Models\NganhHoc;
use App\Models\NguoiDung;
use App\Models\ThesisModel;
use Illuminate\Support\Facades\DB; // e import kiểu này, nó sẽ k báo đỏ chỗ DB nữa
use Illuminate\Database\QueryException;

class ThesisController extends Controller
{

    public function BoMon(Request $request)
    {
        $bomon = $request->input('bomon');
        return view('project.student')->with(['dsbomon' => $bomon]);


        //
    }

    public function GiangVien(request $request)
    {
        $giangvien = NguoiDung::all();
        dd($giangvien);
        // $giangvien = $request->input('');
        // return view('project.dkluanvan')->with(['dsgiangvien' => $giangvien]);
    }

    // public function student($id) {
    //     $data = nguoi_dung ::all();
    //     return view('project.student', compact('data'));
    // }
    // public function index() {
    //     dd($data);
    //     $data = nguoi_dung ::all();
    //     return view('project.student', compact('data'));
    // }
    // public function view($id) {
    //     $data = nguoi_dung ::all();
    //     return view('project.student', compact('data'));
    // }

    public function insertBoMon() {
        try {
            $result = DB::insert('insert into bo_mon (bm_id, bm_ma, bm_ten) values (?, ?, ?)', [1, 'B1709590', 'Thu']); // return 0,1
            //......
            //......
            //......
            echo 'Insert thanh cong!';
        } catch (QueryException $e) {
            echo 'Insert that bai: '.$e->getMessage();
        }
    }

    public function listBoMon() {
        // $updated = DB::update('update bo_mon set bm_ten = ? where bm_id = ?', ['Dong' ,1]); // return 0,1

        // $deleted = DB::delete('delete from bo_mon where bm_id = 3'); // return 0,1

        $result = DB::select('select * from bo_mon'); // return array

        $result = DB::table('bo_mon')->where('bm_id', '=', 1)->get();

        // foreach ($result as $row) {
        //     echo "Id: ".$row->bm_id."<br/>";
        //     echo "Ma: ".$row->bm_ma."<br/>";
        //     echo "Ten: ".$row->bm_ten."<br/>";
        // }

        return view('project.student')->with(['dsbomon' => $result]);
        print_r($result);
    }


    //test taking get params
    public function insertBoMonUseGet(Request $request) {
        print_r($request->all()); // get all params
        // $result = DB::table('bo_mon')->insert( // return 0,1
        //     $request->all()
        // );

        $id = DB::table('bo_mon')->insertGetId( // return inserted id
            $request->all()
        );

        $result = DB::table('bo_mon')->where('bm_id', $id)->first();
        print_r($result);

        // print_r($request->get('ma')); // get $_GET['ma']
        // $request->get('ma') == $request->input('ma');
    }


    public function updateBoMonUseGet(Request $request) {
        // DB::table('bo_mon')->where('bm_id', $request->get('bm_id'))->update(['bm_ten' => $request->get('bm_ten')]);
        DB::table('bo_mon')->where('bm_id', $request->get('bm_id'))->update($request->all());
        // print_r($request->get('ma')); // get $_GET['ma']
        // $request->get('ma') == $request->input('ma');
    }

    //ORM
    public function findId($id) {

        // DB::table('nganh_hoc')->insert( // return 0,1
        //     ['bm_id' => '10', 'n_ma' => "B17", "n_ten" => "CNTT"]
        // );

        // $bomon = BoMon::find(10);

        // foreach ($bomon->NganhHoc as $nganh) {
        //     print_r($nganh);
        // }

        $nganh = NganhHoc::find(1);
        // print_r($nganh->toArray());
        $bomon = $nganh->bo_mon;

        // do model xuong view
        return view('project.login')->with(['nganh' => $nganh, 'bomon' => $bomon]);

        // $nguoidung->lop->nganh->boMon;
    }





}
