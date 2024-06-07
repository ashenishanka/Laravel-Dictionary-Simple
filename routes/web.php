<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\DB;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[WordController::class,'index']);
Route::get('/search',[WordController::class,'search']);

Route::get('/test-db', function(){
    $words = DB::table('words')->get();
    dd($words);
});
