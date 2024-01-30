<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ContactFormController extends Controller
{
    public function index()
    {
        $forms = ContactForm::all();

        return response()->json(['contact_forms' => $forms], 200);
    }

    public function show($id)
    {
        $form = ContactForm::findOrFail($id);

        return response()->json(['contact_form' => $form], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $form = ContactForm::create($request->all());

        return response()->json(['contact_form' => $form], 201);
    }

    public function update(Request $request, $id)
    {
        $form = ContactForm::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required',
            'email' => 'sometimes|required|email',
            'phone_number' => 'sometimes|required',
            'subject' => 'sometimes|required',
            'message' => 'sometimes|required',
        ]);

        $updateData = $request->only(['name', 'email', 'phone_number', 'subject', 'message']);

        $form->update($updateData);

        return response()->json(['contact_form' => $form], 200);
    }

    public function destroy($id)
    {
        $form = ContactForm::findOrFail($id);
        $form->delete();

        return response()->json(null, 204);
    }
}
