<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "this is the student management page";
    }

    public function show($id)
    {
        return "this is the detail page for student with ID: {$id}";
    }

    public function create()
    {
        return "this is the page for creating a new student";
    }
    public function store(Request $request)
    {
        return "this is the page for storing new student data";
    }

    public function edit($id)
    {
        return "this is the page for editing student with ID: {$id}";
    }

    public function update(Request $request, $id)
    {
        return "this is the page for updating student with ID: {$id}";
    }

    public function destroy($id)
    {
        return "this is the page for deleting student with ID: {$id}";
    }
};
