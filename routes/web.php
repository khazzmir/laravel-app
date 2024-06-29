<?php

use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (Request $request) {
    return view('welcome', data: ['nama' => 'Peserta Training']);
});