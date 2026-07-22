<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "ini adalah halaman daftar siswa";
    }

    public function show($id)
    {
        return "ini adalah halaman detail siswa dengan ID: {$id}";
    }
}
