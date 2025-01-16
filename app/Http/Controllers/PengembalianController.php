<?php

namespace App\Http\Controllers;

use App\Models\dt_sewa;
use App\Models\pengembalian;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PengembalianController extends Controller
{
    public function index()
    {

        
        $Pengmbalian = pengembalian::select('*')
        ->join('dt_mobils', 'dt_mobils.id_mobil', '=', 'pengembalians.id_mobil')
        ->join('dt_sewas', 'dt_sewas.id_sewa', '=', 'pengembalians.id_sewa')
        ->get();
        
        // Atau gunakan pagination: User::paginate(10);
        return Inertia::render(
            'Pengembalian', [
            'Pengembalians' => $Pengmbalian
            ],
        );
    }


    public function create($id)
    {

        $sewa = dt_sewa::findOrFail($id);
        $updatesewa = ['status_pinjam' => 'Di Kembalikan'];
        
        $sewa->update($updatesewa);

        $today = Carbon::today();

        $data = pengembalian::create([
            'id_sewa' => $sewa->id_sewa,
            'id_mobil' => $sewa->id_mobil,
            'tgl_pengembalian' => $today,
           
        ]);


        return redirect()->route('pinjam')->with('success', 'Data berhasil disimpan!');
 

    }
}
