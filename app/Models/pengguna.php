<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $table = 'penggunas'; // Nama tabel di database
    protected $primaryKey = 'id_pengguna'; // Nama kolom primary key


    protected $fillable = [
        'id_pengguna',
        'nama_pengguna',
        'alamat',
        'nomor_telepon',
        'nomor_sim',
    ];

}
