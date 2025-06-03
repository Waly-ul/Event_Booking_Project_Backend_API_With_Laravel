<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventsController;
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


Route::get('/healthCheck', function(){
    return response()->json(['message' => 'API is working']);
});


Route::post('/member-registration', [AuthController::class, 'memberRegistration']);
Route::post("/login",[AuthController::class, "login"]);
Route::get("/user/{id}",[AuthController::class, "user"])->middleware('auth:sanctum');
Route::post("/logout",[AuthController::class, "logout"])->middleware('auth:sanctum');




/*
* User's related all data
*
*/

// get all users
Route::get('/users',[UsersController::class,'getUsers']);

// get single user
// Route::get('/user/{id}',[UsersController::class,'getUser']);

// Insert single user
Route::post('/create-user',[UsersController::class,'createUser']);

// update single user
Route::put('/update-user/{id}',[UsersController::class,'updateUser']);

// delete single user
Route::delete('/delete-user/{id}',[UsersController::class,'deleteUser']);

/*
*
* Event's related all data
*/

Route::post('/event', [EventsController::class, 'store']);
Route::get('/events', [EventsController::class, 'events']);
Route::get('/event/{event}', [EventsController::class, 'getEvent']);
Route::put('/event/update/{id}', [EventsController::class, 'updateEvent']);

/*
*
* Booking's related all data
*/
Route::get('/bookings', [BookingsController::class, 'getAllbookings']);
Route::get('/booking/{id}', [BookingsController::class, 'getBooking']);
Route::post('/member-event-booking', [BookingsController::class, 'store']);
Route::get('/member-event-bookings/{id}', [BookingsController::class, 'getMemberbookings']);
Route::put('/booking/update/{id}', [BookingsController::class, 'updateBooking']);