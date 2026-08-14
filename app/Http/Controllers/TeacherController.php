<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Guru";
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone' => '081234560001',
                'status' => 'active',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone' => '081234560002',
                'status' => 'active',
            ]
        ];
        return view("teachers.index", [
            'title' => $title,
            'teachers' => $teachers
        ]);


    }

    public function show($id)
    {
        $title = "Sistem Sekolah - Detail Guru";
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone' => '081234560001',
                'status' => 'active',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone' => '081234560002',
                'status' => 'active',
            ]
        ];
       

        return view("teachers.show", [
            'title' => $title,
            'teacher' => $teachers[$id - 1]
           
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Catat Guru Baru";

        return view("teachers.create", [
            'title' => $title
        ]);
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Guru";
        return view("teachers.edit", [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        return "ini adalah halaman untuk menyimpan data guru baru";
    }



    public function update(Request $request, $id)
    {
        return "ini adalah halaman untuk memperbarui guru dengan ID: {$id}";
    }

    public function destroy($id)
    {
        return "ini adalah halaman untuk menghapus guru dengan ID: {$id}";
    }
}
