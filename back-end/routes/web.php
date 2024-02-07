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

Route::get('/eventsdashboard', [EventController::class, 'eventsDashboardPopulate'])->name('eventsdashboard');

Route::get('/editevent/{id}', [EventController::class, 'showEditEvent'])->name('09_editevent');



Route::get('/volunteerdashboard', [VolunteerController::class, 'index'])->name('volunteersdashboard');

Route::get('/adoptersdashboard', [AdopterController::class, 'index'])->name('adoptersdashboard');

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

Route::get('/announcements', [EventController::class, 'displayAnnouncements'])->name('16_announcements');

Route::get('/volunteering', [EventController::class, 'displayVolunteerings'])->name('17_volunteering');

Route::get('/viewAnnouncement/{id}', [EventController::class, 'displayAnnouncementById'])->name('viewAnnouncement');

Route::get('/viewVolunteering/{id}', [EventController::class, 'displayVolunteeringById'])->name('viewVolunteering');


Route::get('/adminVolunteerForm/{id}', [VolunteerController::class, 'showVolunteerDetails'])->name('20_adminVolunteerForm');

Route::get('/adminAdopterForm/{id}', [AdopterController::class, 'showAdopterDetails'])->name('21_adminAdopterForm');

Route::get('/contactformsdashboard', [ContactFormController::class, 'index'])->name('contactformsdashboard');

Route::get('/adminContactForm/{id}', [ContactFormController::class, 'showContactFormDetails'])->name('23_adminContactForm');


// Contact form
Route::post('/contact-forms/create', [ContactFormController::class, 'store'])->name('submit_contact_form');

// Volunteer form
Route::post('/volunteers/create', [VolunteerController::class, 'store'])->name('submit_volunteer_form');

// Adoption form
Route::post('/adopters/create', [AdopterController::class, 'store'])->name('submit_adoption_form');

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
