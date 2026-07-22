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
        return "this is the major management page";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "this is the page for creating a new major";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "this is the page for storing new major data";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "this is the detail page for major with ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "this is the page for editing major with ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "this is the page for updating major with ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "this is the page for deleting major with ID: {$id}";
    }
}
