<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:petugas'],
            'password' => ['required', 'min:5']
        ]);

        // encrypt
        $validatedData['password'] = Hash::make($validatedData['password']);

        Petugas::create($validatedData);
        
        return redirect('login')->with('success', 'Register Successfull. Please Login');
    }
}
