<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeTai;
class DeTaiController extends Controller
{
    // GET: /form/get
    public function themDetai(Request $request) {

        // get all params

        //print_r($request->all());
        // $params = $request->all();
        // $params['dt_ma'];
        //$params['dt_ten'];


        // get 1 param
        $dt_ma = $_GET['dt_ma'];
        $dt_ten = $_GET['dt_ten'];
        // print_r($request->get('firstName')); // get $_GET['firstName']
        // print_r($request->input('firstName'));

        // return "Hết trầm cảm";
        // return view('project.dsdetai')->with('params',$params);

        return view('project.dsdetai')->with(['dt_ma'=> $dt_ma,'dt_ten' => $dt_ten]);

    }

}
