<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function home()
    {
        return view("layout.master");
    }

    public function mahasiswa()
    {
        return view("mahasiswa");
    }
}