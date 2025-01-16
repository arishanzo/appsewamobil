<?php

namespace App\Http\Controllers;

use App\Models\dt_mobil;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MobilController extends Controller
{
    public function index()
    {
        $Mobil = dt_mobil::all(); // Atau gunakan pagination: User::paginate(10);
        return Inertia::render(
            'mobil', [
            'Mobils' => $Mobil,
            ],
            
    
    );    }


    public function halamanmobil()
    {

        return Inertia::render('Mobilhalaman');


    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'merek_mobil' => 'required|string|max:255',
            'model_mobil' => 'required|string|max:255',
            'plat_mobil' => 'required|max:255',
            'tarif_mobil' => 'required|max:255',
           
        ]);

        dt_mobil::create([
            'nama_mobil' => $request->nama_mobil,
            'merek_mobil' => $request->merek_mobil,
            'model_mobil' => $request->model_mobil,
            'plat_mobil' => $request->plat_mobil,
            'tarif_mobil' => $request->tarif_mobil,
            'status' => 'Ready',
        ]);

      
        return redirect()->back();

    }
}
