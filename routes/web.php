<?php

use App\Http\Controllers\MBTIController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('app'); // Menampilkan tampilan utama dari Blade
});
Route::get('/mbti/{mbti}', [MBTIController::class, 'getJobs']);