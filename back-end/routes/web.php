<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Http\Controllers\volunteerFormController;
use App\Http\Controllers\PetInformationController;

=======
>>>>>>> main
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

Route::get('/eventsdashboard', [EventController::class, 'index'])->name('eventsdashboard');

Route::get('/editevent/{id}', [EventController::class, 'showEditEvent'])->name('09_editevent');



Route::get('/volunteerdashboard', function () {
    return view('10_VolunteerDashboard');
})->name('volunteerdashboard');

Route::get('/adoptersdashboard', function () {
    return view('11_AdoptersDashboard');
})->name('adoptersdashboard');

Route::get('/petgallery', function () {
    return view('12_PetGallery');
})->name('petgallery');

Route::get('/petinfo', function () {
    return view('13_PetInfo');
})->name('petinfo');


Route::get('/volunteer', function () {
    return view('14_volunteer');
})->name('volunteer');

Route::get('/adopt', function () {
    return view('15_adopt');
})->name('adopt');

Route::get('/announcements', function () {
    return view('16_announcements');
})->name('announcements');

Route::get('/volunteering', function () {
    return view('17_volunteering');
})->name('volunteering');

Route::get('/viewAnnouncement', function () {
    return view('18_viewAnnouncement');
})->name('viewannouncement');

Route::get('/viewVolunteering', function () {
    return view('19_viewVolunteering');
})->name('viewVolunteering');

Route::get('/petInformation', function () {
    return view('petInformation');
})->name('petInformation');

Route::get('/adoptForm', function () {
    return view('adoptForm');
})->name('adoptForm');



// Contact form
Route::post('/contact-forms/create', [ContactFormController::class, 'store'])->name('submit_contact_form');

// Login
Route::post('/admins/login', [AdminController::class,'validateLogin'])->name('validateLogin');
Route::get('/admins/logout', [AdminController::class,'logout'])->name('logout');

// Edit Profile
Route::put('/admins/update/{id}', [AdminController::class, 'update'])->name('updateProfile');

// Add event
Route::post('/events/create', [EventController::class, 'store'])->name('events.store');

// Edit event
Route::put('/events/update/{id}', [EventController::class, 'update'])->name('updateEvent');

// Delete event
Route::delete('events/delete/{id}', [EventController::class, 'destroy'])->name('deleteEvent');
<<<<<<< HEAD

// Volunteer Form
Route::post('/volunteerForm-forms/create', [VolunteerFormController::class, 'store'])->name('submit_volunteer_form');

//Pet Information
Route::post('/petInformation-forms/create', [PetInformationController::class, 'store'])->name('pet.information.form.create');





=======
>>>>>>> main
