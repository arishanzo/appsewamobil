<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dt_mobil extends Model
{
    use HasFactory;

    protected $table = 'dt_mobils'; // Nama tabel di database
    protected $primaryKey = 'id_mobil'; // Nama kolom primary key

    protected $fillable = [
        'id_mobil',
        'nama_mobil',
        'merek_mobil',
        'model_mobil',
        'plat_mobil',
        'tarif_mobil',
        'status',
    ];
}
