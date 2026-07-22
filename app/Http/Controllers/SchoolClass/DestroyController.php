<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        return "this is the page for deleting a school class with id: $id";
    }
}
