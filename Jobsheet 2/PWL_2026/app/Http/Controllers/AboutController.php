<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(): string
    {
        $name = 'Adam Bahy Maulana';
        $studentId = '244107020207';

        return "Nama: $name\nNIM: $studentId";
    }
}
