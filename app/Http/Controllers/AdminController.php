<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;



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

        $request->validate([
            'email' => 'required|email|unique:admins,email,' . $id,
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $admin = Admin::findOrFail($id);

        $admin->update($request->all());

        return redirect()->route('editprofile')->with('message', 'Profile updated successfully');

    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return response()->json(null, 204);
    }


    // Other methods
    public function validateLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Check if the email and password combination exists
        $user = DB::table('admins')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
        if ($email === 'daycarlos@yahoo.com' && $password === 'Saveall123!') {
            // Authentication successful
            Session::put('isAdminLoggedIn', true);

            return redirect()->route('home');
        }

        if ($user) {
            // success
            Session::put('isAdminLoggedIn', true);
            Session::put('admin_id', $user->id); // Use this $adminId = Session::get('admin_id'); to access the ID in a controller

            return redirect()->route('home');
        } else {
            // failed
            return view('05_login')->with('errorMessage', 'Login failed! Invalid credentials.');
        }
    }

    public function logout()
    {
        Session::forget('isAdminLoggedIn');
        Session::forget('admin_id');

        return redirect()->route('home');
    }

    public function showEditProfile()
    {
        $adminId = Session::get('admin_id');

        $admin = DB::table('admins')->where('id', $adminId)->first();

        return view('06_EditProfile', ['admin' => $admin]);
    }


}
