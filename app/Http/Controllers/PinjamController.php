<?php

namespace App\Http\Controllers;

use App\Models\dt_sewa;
use App\Models\pinjaman;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PinjamController extends Controller
{
    public function index()
    {
        
       
        $Pinjaman = dt_sewa::select('*')
        ->join('dt_mobils', 'dt_mobils.id_mobil', '=', 'dt_sewas.id_mobil')
        ->get();
        
        // Atau gunakan pagination: User::paginate(10);
        return Inertia::render(
            'Pinjam', [
            'Pinjamans' => $Pinjaman
            ],
            
    
    );  
    }


   
}
