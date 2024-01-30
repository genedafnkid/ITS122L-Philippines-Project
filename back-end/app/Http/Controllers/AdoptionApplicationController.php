<?php

namespace App\Http\Controllers;


use App\Models\AdoptionApplication;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdoptionApplicationController extends Controller
{
    public function index()
    {
        $applications = AdoptionApplication::all();

        return response()->json(['applications' => $applications], 200);
    }

    public function show($id)
    {
        $application = AdoptionApplication::findOrFail($id);

        return response()->json(['application' => $application], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'status' => 'required',
            'meet_date' => 'nullable|date',
            'review_date' => 'nullable|date',
            'results_date' => 'nullable|date',
            'applicant_id' => 'required|exists:adopters,id',
            'pet_id' => 'required|exists:pets,id',
        ]);

        $application = AdoptionApplication::create($request->all());

        return response()->json(['application' => $application], 201);
    }

    public function update(Request $request, $id)
    {
        $application = AdoptionApplication::findOrFail($id);

        $request->validate([
            'comment' => 'sometimes|required|string',
            'status' => 'sometimes|required|string|in:pending,approved,rejected',
            'meet_date' => 'sometimes|nullable|date',
            'review_date' => 'sometimes|nullable|date',
            'results_date' => 'sometimes|nullable|date',
            'applicant_id' => 'sometimes|required|exists:adopters,id',
            'pet_id' => 'sometimes|required|exists:pets,id',
        ]);

        $updateData = $request->only([
            'comment', 'status', 'meet_date', 'submission_date',
            'review_date', 'results_date', 'modified_date',
            'applicant_id', 'pet_id',
        ]);

        $application->update($updateData);

        return response()->json(['application' => $application], 200);
    }

    public function destroy($id)
    {
        $application = AdoptionApplication::findOrFail($id);
        $application->delete();

        return response()->json(null, 204);
    }
    
}
