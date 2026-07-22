<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
       public function index()
    {
        return "this is the teacher management page";
    }

    public function show($id)
    {
        return "this is the detail page for teacher with ID: {$id}";
    }

    public function create()
    {
        return "this is the page for creating a new teacher";
    }
    public function store(Request $request)
    {
        return "this is the page for storing new teacher data";
    }

    public function edit($id)
    {
        return "this is the page for editing teacher with ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "this is the page for updating teacher with ID: {$id}";
    }

    public function destroy($id)
    {
        return "this is the page for deleting teacher with ID: {$id}";
    } 
}
