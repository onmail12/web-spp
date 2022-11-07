<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SppController extends Controller
{
    public function index()
    {
        $spp = Spp::all();
        return view("spp/spp", compact('spp'));
    }

    public function create(Request $request)
    {
        Spp::create([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);

        return redirect(route("spp"));
    }

    public function edit(Request $request, Spp $spp)
    {
        $spp = Spp::where('id_spp', $spp->id_spp)->get();
        return view('spp/edit_spp', compact('spp'));
    }

    public function update(Request $request, Spp $spp)
    {
        
        $spp = Spp::where('id_spp', $request->id_spp)->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal,
        ]);
        // $spp = Spp::where('id_spp', $request->id_spp)->get();
        
        return redirect(route('spp'));
    }

    public function delete(Spp $spp){
        $spp = Spp::where('id_spp', $spp->id_spp)->delete();
        return redirect(route('spp'));
    }
}
