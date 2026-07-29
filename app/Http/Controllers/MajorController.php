<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "ini adalah halaman manajemen jurusan";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "ini adalah halaman untuk membuat jurusan baru";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "ini adalah halaman untuk menyimpan data jurusan baru";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "ini adalah halaman detail untuk jurusan dengan ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "ini adalah halaman untuk mengedit jurusan dengan ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "ini adalah halaman untuk memperbarui jurusan dengan ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "ini adalah halaman untuk menghapus jurusan dengan ID: {$id}";
    }
}
