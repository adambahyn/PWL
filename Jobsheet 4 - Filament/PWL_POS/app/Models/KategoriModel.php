<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = 'm_kategori';        // Mendefinisikan nama tabel yang digunakan
    protected $primaryKey = 'kategori_id';  // Mendefinisikan primary key dari tabel tersebut

    // Kolom-kolom yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'kategori_kode',
        'kategori_nama'
    ];

    /**
     * Relasi ke BarangModel
     * Satu kategori bisa memiliki banyak barang (One-to-Many)
     */
    public function barang(): HasMany
    {
        return $this->hasMany(BarangModel::class, 'kategori_id', 'kategori_id');
    }
}