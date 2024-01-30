<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();

        return response()->json(['admins' => $admins], 200);
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);

        return response()->json(['admin' => $admin], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'email' => 'required|email|unique:admins',
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'display_image' => 'nullable',
            'last_login_date' => 'nullable|date',
        ]);

        $admin = Admin::create($request->all());

        return response()->json(['admin' => $admin], 201);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $request->validate([
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'role' => 'required',
            'display_image' => 'nullable',
            'last_login_date' => 'nullable|date',
        ]);

        $admin->update($request->all());

        return response()->json(['admin' => $admin], 200);
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return response()->json(null, 204);
    }
}
