<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $title = "Ubah Kelas Sekolah";

        return view("classes.edit", [
            'title' => $title
        ]);
    }
}
