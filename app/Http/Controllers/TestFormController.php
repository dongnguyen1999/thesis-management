<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    // GET: /form/get
    public function testGet(Request $request) {

        // get all params

        // print_r($request->all());
        // $params = $request->all();
        // $params['firstName'];
        // $params['lastName'];


        // get 1 param

        // print_r($request->get('firstName')); // get $_GET['firstName']
        // print_r($request->input('firstName'));

        return view('test.form');

    }

    // POST: /form/post
    public function testPost(Request $request) {

        // print_r($request->all());
        // $params = $request->all();
        // $params['firstName'];
        // $params['lastName'];

        $loginSuccess = false;
        if ($loginSuccess) {
            return redirect('/');
        }

        return view('project.loginDong')->with(['error' => 'Lỗi đăng nhập', 'message' => 'Tên tài khoản hoặc mật khẩu không chính xác']);

    }


    //GET
    public function formView() {
        // return view('project.loginDong');
        return view('test.form');
    }
}
