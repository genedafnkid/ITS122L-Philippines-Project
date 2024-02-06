<?php

namespace App\Http\Controllers;

use App\Models\volunteerForm;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class volunteerFormController extends Controller
{
    //
    public function index()
    {
        $volunteers = volunteerForm::all();

        return response()->json(['volunteers' => $volunteers], 200);
    }

    public function show($id)
    {
        $volunteer = volunteerForm::findOrFail($id);

        return response()->json(['volunteer' => $volunteer], 200);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'postal_code' => 'required',
                'birth_date' => 'required|date',
                'availability' => 'required',
                'skills' => 'required',
                'interests' => 'required',
                'previous_experience' => 'required',
                'additional_info' => 'required',
            ]);

            $volunteer = volunteerForm::create($request->all());

            // success message
            $message = 'Volunteer form submitted successfully';

            return view('volunteerForm', compact('message'));
        } catch (\Exception $e) {
            // error handler
            $message = 'Volunteer form submission failed. Error: ' . $e->getMessage();

            return view('volunteerForm', compact('message'));
        }
    }

    public function update(Request $request, $id)
    {
        $volunteer = volunteerForm::findOrFail($id);

        $request->validate([
            'first_name' => 'sometimes|required',
            'last_name' => 'sometimes|required',
            'email' => 'sometimes|required|email',
            'phone_number' => 'sometimes|required',
            'address' => 'sometimes|required',
            'city' => 'sometimes|required',
            'state' => 'sometimes|required',
            'postal_code' => 'sometimes|required',
            'birth_date' => 'sometimes|required|date',
            'availability' => 'sometimes|required',
            'skills' => 'sometimes|required',
            'interests' => 'sometimes|required',
            'previous_experience' => 'sometimes|required',
            'additional_info' => 'sometimes|required',
        ]);

        $updateData = $request->only([
            'first_name', 'last_name', 'email', 'phone_number', 'address',
            'city', 'state', 'postal_code', 'birth_date', 'availability',
            'skills', 'interests', 'previous_experience', 'additional_info',
        ]);

        $volunteer->update($updateData);

        return response()->json(['volunteer' => $volunteer], 200);
    }

    public function destroy($id)
    {
        $volunteer = volunteerForm::findOrFail($id);
        $volunteer->delete();

        return response()->json(null, 204);
    }
}
