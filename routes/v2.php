<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

 
// Get all users
Route::post('/users', function () {
    return 'Get all users';
});

// match allow http requests
Route::match(['patch', 'post', 'put'], '/jossa', function () {
    return "This route is for you";
    // ...
});
Route::match(['get', 'post', 'put'], '/jossa', function () {
    return "This route is for them";
    // ...
});
Route::any('/updateUserInfo', function (){
    return "All of us are dead";
});
// Route::get('/useryou', function (Request $request) {
//     return $request ->email;
    
// });
Route::get('/useryou', function (Request $request) {
    // ... 
    return $request->name . ' - ' . $request->email .  ' - ' . $request->age;
    
});



//closure is a call


//use post to create data
//put and patch used for updates but patch only updates specific data

// Controllers

// Route::get('/users',[UserController::class,'index']);