<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SppController extends Controller
{
    public function index(){
        $spp = Spp::all();
        
        return view("spp/spp", compact('spp'));
    }
}
