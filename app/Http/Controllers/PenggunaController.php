<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PenggunaController extends Controller
{
    public function index()
    {

        $pengguna = pengguna::all(); // Atau gunakan pagination: User::paginate(10);
        return Inertia::render(
            'Pengguna', [
            'penggunas' => $pengguna,
            ],
            
    
    );
    }
}
