<?php
use App\Http\Controllers\DSSController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculate', [DSSController::class, 'calculate']);

Route::get('/add-criterion', function () {
    return view('add_criterion');
});

Route::post('/add-criterion', [DSSController::class, 'storeCriterion']);

Route::get('/add-alternative', function () {
    return view('add_alternative');
});

Route::post('/add-alternative', [DSSController::class, 'storeAlternative']);

Route::get('/calculate', [DSSController::class, 'calculate']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);