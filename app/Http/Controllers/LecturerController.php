<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
