<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $title = "Detail Kelas Sekolah";

        return view("classes.show", [
            'title' => $title
        ]);
    }
}
