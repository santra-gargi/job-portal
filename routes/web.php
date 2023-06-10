<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\companyAuthController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userAuthController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[companyAuthController::class,'registerIndex'])->middleware('alreadyLoggedIn');
Route::post('/register',[companyAuthController::class,'registration']);
Route::get('/login',[companyAuthController::class,'loginIndex'])->middleware('alreadyLoggedIn');
Route::post('/login',[companyAuthController::class,'comLogin']);

Route::get('/logout',[companyAuthController::class,'logout']);



// Route::get('/jobpost', function () {
//     return view('company.jobpost');
// });
// Route::get('/dashboard', function () {
//     return view('company.dashboard');
// });

// Route::get('pri', function () {
//     return view('company.Form');
// });
// Route::post('postjob',[pri::class,'addData']);
// Route::View('pri','company.Form');

// Route::get('job',[pri::class,'postjob']);

Route::get('/job',[jobController::class,'Index']);
Route::post('/job',[jobController::class,'formStore']);
Route::get('/postjob',[jobController::class,'jobView']);



Route::get('/apply',[userController::class,'formIndex']);
Route::post('/apply',[userController::class,'form']);
Route::get('applicant',[userController::class,'applicantView'])->middleware('isLoggendIn');
Route::get('/userdash',[userController::class,'dashboard']);


Route::get('/userreg',[userAuthController::class,'regIndex'])->middleware('userAlreadyLogin');
Route::post('/userreg',[userAuthController::class,'userRegis']);
Route::get('/userlog',[userAuthController::class,'logIndex'])->middleware('userAlreadyLogin');
Route::post('/userlog',[userAuthController::class,'userLogin']);

Route::get('/userlogout',[userAuthController::class,'userlogout']);

//profile
Route::get('/profile', function () {
         return view('user.profile');
});
Route::get('profile',[userAuthController::class,'table'])->middleware('isLogIn');

Route::get('dataupdate/{id}',[userAuthController::class,'update']);
Route::get('delete/{id}',[userAuthController::class,'delete']);
Route::get('dataupdate',[userAuthController::class,'edit']);

