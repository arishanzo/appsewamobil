<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalians'; // Nama tabel di database
    protected $primaryKey = 'id_pengembalian'; // Nama kolom primary key

    protected $fillable = [
        'id_sewa',
        'id_mobil',
        'tgl_pengembalian',
    ];
}
