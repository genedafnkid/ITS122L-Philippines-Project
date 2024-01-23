<?php

namespace App\Http\Controllers;

use App\Models\Adopter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdopterController extends Controller
{
    public function index()
    {
        $adopters = Adopter::all();

        return response()->json(['adopters' => $adopters], 200);
    }

    public function show($id)
    {
        $adopter = Adopter::findOrFail($id);

        return response()->json(['adopter' => $adopter], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:adopters',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required',
            'birth_date' => 'required|date',
            'age' => 'required|integer',
            'occupation' => 'required',
            'living_arrangement' => 'required',
            'housing_type' => 'required',
            'family_members' => 'required|integer',
            'children_count' => 'required|integer',
            'pet_experience' => 'required',
            'current_pets' => 'required',
            'previous_pets' => 'required',
            'reasons_to_adopt' => 'required',
            'pet_preferences' => 'required',
            'display_image' => 'nullable',
            'registered_date' => 'required|date',
        ]);

        $adopter = Adopter::create($request->all());

        return response()->json(['adopter' => $adopter], 201);
    }

    public function update(Request $request, $id)
    {
        $adopter = Adopter::findOrFail($id);

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:adopters,email,' . $adopter->id,
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required',
            'birth_date' => 'required|date',
            'age' => 'required|integer',
            'occupation' => 'required',
            'living_arrangement' => 'required',
            'housing_type' => 'required',
            'family_members' => 'required|integer',
            'children_count' => 'required|integer',
            'pet_experience' => 'required',
            'current_pets' => 'required',
            'previous_pets' => 'required',
            'reasons_to_adopt' => 'required',
            'pet_preferences' => 'required',
            'display_image' => 'nullable',
            'registered_date' => 'required|date',
        ]);

        $adopter->update($request->all());

        return response()->json(['adopter' => $adopter], 200);
    }


    public function destroy($id)
    {
        $adopter = Adopter::findOrFail($id);
        $adopter->delete();

        return response()->json(null, 204);
    }
}
