<?php

namespace App\Http\Controllers;

use App\Models\dt_mobil;
use App\Models\dt_sewa;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SewaController extends Controller
{
    
    public function halamansewa($id_mobil)
    {
     

        $Mobil = dt_mobil::findOrFail($id_mobil);

        $tarif = dt_mobil::first();

        return Inertia::render('Pinjamhalaman', [
            'Mobils' => $Mobil,
            'tarif' => $tarif->tarif_mobil,
        ]);


    }

    
    public function store(Request $request, $id)
    {

        // dd($request->all($id));

        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date',
           
        ]);

        $item = dt_mobil::findOrFail($id);

     

        $item->status = 'Di Sewa';
         $item->save();
       

        
     


        return response()->json(['message' => 'Item updated successfully', 'item' => $item], 200);
 
      



    }
}
