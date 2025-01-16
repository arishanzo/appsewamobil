<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dt_sewa extends Model
{
    use HasFactory;

    protected $table = 'dt_sewas'; // Nama tabel di database
    protected $primaryKey = 'id_sewa'; // Nama kolom primary key

    protected $fillable = [
        'id_sewa',
        'id_mobil',
        'tgl_mulai',
        'tgl_selesai',
        'total_tarif',
        'status_pinjam',
    ];
}
