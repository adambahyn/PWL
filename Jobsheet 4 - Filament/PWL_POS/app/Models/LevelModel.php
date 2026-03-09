<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $table = 'm_level'; // ← tambahkan ini, sesuaikan dengan nama tabel di DB
    protected $primaryKey = 'level_id';

    protected $fillable = ['level_kode', 'level_nama'];
}