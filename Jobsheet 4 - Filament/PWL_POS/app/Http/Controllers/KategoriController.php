<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    // Menampilkan halaman awal kategori
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Kategori',
            'list' => ['Home', 'Kategori']
        ];
        
        $page = (object) [
            'title' => 'Daftar kategori barang yang terdaftar dalam sistem'
        ];
        
        $activeMenu = 'kategori'; // Nilai ini yang akan membuat menu sidebar 'Data Kategori' menyala (active)

        return view('kategori.index', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page, 
            'activeMenu' => $activeMenu
        ]);
    }

    // Mengambil data kategori dalam bentuk json untuk DataTables
    public function list(Request $request)
    {
        // Ambil data kategori dari database
        $kategoris = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama');

        return DataTables::of($kategoris)
            ->addIndexColumn() // Kolom untuk nomor urut (DT_RowIndex)
            ->addColumn('aksi', function ($kategori) { // Kolom tombol aksi
                $btn  = '<a href="'.url('/kategori/' . $kategori->kategori_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/kategori/' . $kategori->kategori_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'.url('/kategori/'.$kategori->kategori_id).'">'
                        . csrf_field() . method_field('DELETE') . 
                        '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus kategori ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi']) // Beritahu DataTables bahwa kolom aksi berisi tag HTML, bukan teks biasa
            ->make(true);
    }
}