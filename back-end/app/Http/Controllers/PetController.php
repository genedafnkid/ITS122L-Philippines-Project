<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();

        return response()->json(['pets' => $pets], 200);
    }

    public function show($id)
    {
        $pet = Pet::findOrFail($id);

        return response()->json(['pet' => $pet], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'adoption_status' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'age' => 'required|integer',
            'breed' => 'required',
            'color' => 'required',
            'description' => 'required',
            'display_image' => 'nullable',
            'vaccine_name' => 'nullable',
            'initial_vaccine_date' => 'nullable|date',
            'booster_date' => 'nullable|date',
            'expiration_vaccine_date' => 'nullable|date',
        ]);

        $pet = Pet::create($request->all());

        return response()->json(['pet' => $pet], 201);
    }

    public function update(Request $request, $id)
    {
        $pet = Pet::findOrFail($id);

        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'adoption_status' => 'required',
            'gender' => 'required',
            'birth_date' => 'required|date',
            'age' => 'required|integer',
            'breed' => 'required',
            'color' => 'required',
            'description' => 'required',
            'display_image' => 'nullable',
            'vaccine_name' => 'nullable',
            'initial_vaccine_date' => 'nullable|date',
            'booster_date' => 'nullable|date',
            'expiration_vaccine_date' => 'nullable|date',
        ]);

        $pet->update($request->all());

        return response()->json(['pet' => $pet], 200);
    }

    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return response()->json(null, 204);
    }

}
