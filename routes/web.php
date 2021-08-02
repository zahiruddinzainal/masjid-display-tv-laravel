<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('home');
});

Route::get('/solat', [ MainController::class, "maindisplay" ]);

Route::get('/kuliah', [ MainController::class, "senaraikuliah" ]);
Route::get('/tambahkuliah', [ MainController::class, "tambahkuliah" ]);
Route::post('/insertkuliah', [ MainController::class, "insertkuliah" ]);


Route::get('/tambahmakluman', [ MainController::class, "tambahmakluman" ]);
Route::post('/insertmakluman', [ MainController::class, "insertmakluman" ]);

Route::get('/tambahakaunbank', [ MainController::class, "tambahakaunbank" ]);
Route::post('/insertakaunbank', [ MainController::class, "insertakaunbank" ]);

Route::get('/tambahquran', [ MainController::class, "tambahquran" ]);
Route::post('/insertquran', [ MainController::class, "insertquran" ]);

Route::get('/tambahhadith', [ MainController::class, "tambahhadith" ]);
Route::post('/inserthadith', [ MainController::class, "inserthadith" ]);


Route::get('/hubungikami', function () {
    return view('hubungikami');
});

Route::get('/waktu', function () {
    return view('waktu');
});


Route::get('/makluman', function () {
    return view('makluman');
});

Route::get('/paparanteks', function () {
    return view('paparanteks');
});

Route::get('/kamera', function () {
    return view('kamera');
});

Route::get('/temasistem', function () {
    return view('temasistem');
});




