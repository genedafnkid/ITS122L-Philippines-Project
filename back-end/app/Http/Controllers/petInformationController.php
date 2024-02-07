<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class petInformationController extends Controller
{
    //
    public function showPetInformationForm()
    {
        return view('petInformation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'petId' => 'required',
            'petName' => 'required',
            'age' => 'required|numeric',
            'breed' => 'required',
            'sex' => 'required',
            'neutered' => 'required',
        ]);

        PetInformation::create($request->all());

        

        return redirect()->route('pet.information.form')->with('message', 'Pet Information submitted successfully');
    }
}
