<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('homepage')->with(['error'=>'Loi dang nhap', 'message'=>'Ten tk hoac mk khong chinh xac!']);
    }
    public function login() {
        return view('project.login');
    }
    public function student() {
        return view('project.student');
    }

    // trong student
    public function dkluanvan() {
        return view('project.dkluanvan');
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
