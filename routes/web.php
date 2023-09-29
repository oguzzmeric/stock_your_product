<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ;
use App\Http\Controllers\ProductController ;
use App\Models\User ;

use App\Models\Product ;

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

    $products = [];
    if (auth()->check()){
    $products = auth()->user()->coolproducts()->latest()->get();
    }

    $user = auth()->user();

    return view('home' , ['user' => $user ] , [ 'products' => $products ] );


});
Route::post('/register' , [UserController::class , 'register' ]);
Route::post('/logout' , [UserController::class , 'logout']);
Route::post('/login' , [UserController::class , 'login']);
Route::post('/loginpage' , [UserController::class , 'getloginpage']);



Route::post('/create-product' , [ProductController::class , 'createproduct']);
Route::get('/edit-product/{product}' , [ProductController::class , 'showeditproduct']);

Route::put('/edit-product/{product}' , [ProductController::class , 'actuallyedit']);
Route::delete('/delete-product/{product}' , [ProductController::class , 'deleteproduct']);





