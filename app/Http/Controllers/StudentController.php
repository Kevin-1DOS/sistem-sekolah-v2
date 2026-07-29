<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1,
                'nis' => '1234567890',
                'name' => 'Jiyan',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1234567891',
                'name' => 'Dornado',
                'class' => 'XII AKL 2',
                'major' => 'AKL'
            ]
        ];
        return view("students.index", [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view("students.show", [
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Catat Siswa Baru";

        return view("students.create", [
            'title' => $title
        ]);
    }

        public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Siswa";
        return view("students.edit", [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        return "ini adalah halaman untuk menyimpan data siswa baru";
    }



    public function update(Request $request, $id)
    {
        return "ini adalah halaman untuk memperbarui siswa dengan ID: {$id}";
    }

    public function destroy($id)
    {
        return "ini adalah halaman untuk menghapus siswa dengan ID: {$id}";
    }
};
