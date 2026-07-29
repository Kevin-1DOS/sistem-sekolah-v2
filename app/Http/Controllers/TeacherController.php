<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
       public function index()
    {
        return "ini adalah halaman manajemen guru";
    }

    public function show($id)
    {
        return "ini adalah halaman detail untuk guru dengan ID: {$id}";
    }

    public function create()
    {
        return "ini adalah halaman untuk membuat guru baru";
    }
    public function store(Request $request)
    {
        return "ini adalah halaman untuk menyimpan data guru baru";
    }

    public function edit($id)
    {
        return "ini adalah halaman untuk mengedit guru dengan ID: {$id}";
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
