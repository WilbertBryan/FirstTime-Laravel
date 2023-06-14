<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

route:: get('/',function(){
    return view('homepage');
    
});
route:: get('/Watching-Movies',function(){
    return view('Watching-Movies');
    
});
route:: get('/Listening-Music',function(){
    return view('Listening-Music');
    
});
route:: get('/Playing-Games',function(){
    return view('Playing-Games');
    
});
