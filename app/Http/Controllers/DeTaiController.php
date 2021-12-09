<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeTai;
class DeTaiController extends Controller
{
    public function chitietdetai(Request $request) {
        $dt_id = $request->route('dt_id'); 
        
        if ($dt_id) {
            $detai = DeTai::find($dt_id);
            return view('project.chitietdetai')->with('detai', $detai);
        }

        return redirect('/not-found');
    }
    
}
