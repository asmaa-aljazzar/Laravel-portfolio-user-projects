<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;

// Route::get('/', function () {
//     return 'أهلاً بكم في معسكر البرمجة!';
// });


// Route::get('/student/{name}', function ($name) {
//     return 'أهلاً بك يا ' . $name . ' في الدورة';
// });



// Route::get('/home', function () {
//     $name = 'تطوير تطبيقات الويب باستخدام Laravel';
//     return view('home', ['courseName' => $name]);
// });


//task

// Route::get('/developer/{name}/{track}', function ($name, $track) {
//     return view('profile', [
//         'developerName' => $name,
//         'developerTrack' => $track
//     ]);
// });



//profolio

Route::get('/', [PortfolioController::class, 'home'])->name('home');
//? Route::resource() takes the controller class only. Laravel automatically maps its methods
Route::resource('/projects', ProjectController::class);
// Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
