<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;


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

Route::get('test',[MyController::class,'operations']);

// to call controller function
Route::get('list',[UserController::class,'dataList']);
Route::get('delete/{id}',[UserController::class,'dataDelete']);
Route::get('edit/{id}',[UserController::class,'dataEdit']);
Route::post('edit',[UserController::class,'dataUpdate']);


// To call Controller

// Route::post('users',[UserController::class,'loadView']);
// Route::view('login','users');


// about view
// Route::view('edit','edit');
Route::view('users','users');
// Route::get('users',function(){
//     if(session()->has('username')){
//         return redirect('about');
//     }
//     return view('users');
// });
// Route::view('home','home')->middleware('protectedAge');
// Route::get('logout',function(){
//     if(session()->has('username')){
//         session()->pull('username',null);
//     }
//     return redirect('users');
// });



// Route::group(['middleware'=>['protectPage']],function(){
//     Route::view('users',"users");
//     Route::view('about','about');
//     Route::view('home','home');
// });

