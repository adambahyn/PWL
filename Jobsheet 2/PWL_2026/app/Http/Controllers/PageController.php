<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about(): string
    {
        $name = 'Adam Bahy Maulana';
        $studentId = '244107020207';

        return "Nama: $name\nNIM: $studentId";
    }
public function articles( $id )
    { 
        return 'Halaman Artikel ke : ' . $id;
    }

}
