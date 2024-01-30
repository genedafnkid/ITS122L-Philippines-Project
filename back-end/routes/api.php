<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdopterController;
use App\Http\Controllers\AdoptionApplicationController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Routes for Admins
Route::resource('admins', AdminController::class);
Route::get('/admins', [AdminController::class, 'index']);
Route::get('/admins/{id}', [AdminController::class, 'show']);
Route::post('/admins/create', [AdminController::class, 'store']);
Route::put('/admins/update/{id}', [AdminController::class, 'update']);
Route::delete('/admins/delete/{id}', [AdminController::class, 'destroy']);

// Routes for Adopters
Route::resource('adopters', AdopterController::class);
Route::get('/adopters', [AdopterController::class, 'index']);
Route::get('/adopters/{id}', [AdopterController::class, 'show']);
Route::post('/adopters/create', [AdopterController::class, 'store']);
Route::put('/adopters/update/{id}', [AdopterController::class, 'update']);
Route::delete('/adopters/delete/{id}', [AdopterController::class, 'destroy']);

// Routes for Pets
Route::resource('pets', PetController::class);
Route::get('/pets', [PetController::class, 'index']);
Route::get('/pets/{id}', [PetController::class, 'show']);
Route::post('/pets/create', [PetController::class, 'store']);
Route::put('/pets/update/{id}', [PetController::class, 'update']);
Route::delete('/pets/delete/{id}', [PetController::class, 'destroy']);

// Routes for AdoptionApplication
Route::resource('adoption-applications', AdoptionApplicationController::class);
Route::get('/adoption-applications', [AdoptionApplicationController::class, 'index']);
Route::get('/adoption-applications/{id}', [AdoptionApplicationController::class, 'show']);
Route::post('/adoption-applications/create', [AdoptionApplicationController::class, 'store']);
Route::put('/adoption-applications/update/{id}', [AdoptionApplicationController::class, 'update']);
Route::delete('/adoption-applications/delete/{id}', [AdoptionApplicationController::class, 'destroy']);

// Routes for ContactForm
Route::resource('contact-forms', ContactFormController::class);
Route::get('/contact-forms', [ContactFormController::class, 'index']);
Route::get('/contact-forms/{id}', [ContactFormController::class, 'show']);
Route::post('/contact-forms/create', [ContactFormController::class, 'store']);
Route::put('/contact-forms/update/{id}', [ContactFormController::class, 'update']);
Route::delete('/contact-forms/delete/{id}', [ContactFormController::class, 'destroy']);

// Routes for Volunteers
Route::resource('volunteers', VolunteerController::class);
Route::get('/volunteers', [VolunteerController::class, 'index']);
Route::get('/volunteers/{id}', [VolunteerController::class, 'show']);
Route::post('/volunteers/create', [VolunteerController::class, 'store']);
Route::put('/volunteers/update/{id}', [VolunteerController::class, 'update']);
Route::delete('/volunteers/delete/{id}', [VolunteerController::class, 'destroy']);

// Routes for Events
Route::resource('events', EventController::class);
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events/create', [EventController::class, 'store']);
Route::put('/events/update/{id}', [EventController::class, 'update']);
Route::delete('/events/delete/{id}', [EventController::class, 'destroy']);
