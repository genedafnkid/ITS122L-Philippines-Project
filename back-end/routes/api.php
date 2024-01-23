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

Route::resource('adoption-applications', AdoptionApplicationController::class);
Route::resource('volunteers', VolunteerController::class);
Route::resource('contact-forms', ContactFormController::class);
Route::resource('events', EventController::class);


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


