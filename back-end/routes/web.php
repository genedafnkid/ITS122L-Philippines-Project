<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('01_home');
})->name('home');

Route::get('/about', function () {
    return view('03_about');
})->name('about');

Route::get('/donate', function () {
    return view('02_donate');
})->name('donate');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/contact', function () {
    return view('04_contact');
})->name('contact');

Route::get('/login', function () {
    return view('05_login');
})->name('login');

Route::get('/editprofile', [AdminController::class, 'showEditProfile'])->name('editprofile');

Route::get('/newevent', function () {
    return view('07_NewEvents');
})->name('newevent');

Route::get('/eventsdashboard', function () {
    return view('08_EventsDashboard');
})->name('eventsdashboard');

Route::get('/editevent', function () {
    return view('09_EditEvent');
})->name('editevent');

Route::get('/adoption', function () {
    return view('10_Adoption');
})->name('adoption');

Route::get('/volunteerdashboard', function () {
    return view('10_VolunteerDashboard');
})->name('volunteerdashboard');

Route::get('/adoptersdashboard', function () {
    return view('11_AdoptersDashboard');
})->name('adoptersdashboard');

// Contact form
Route::post('/contact-forms/create', [ContactFormController::class, 'store'])->name('submit_contact_form');

// Login
Route::post('/admins/login', [AdminController::class,'validateLogin'])->name('validateLogin');
Route::get('/admins/logout', [AdminController::class,'logout'])->name('logout');


// Edit Profile
Route::put('/admins/update/{id}', [AdminController::class, 'update'])->name('updateProfile');

