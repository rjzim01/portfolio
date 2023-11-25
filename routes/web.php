<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('1_home');
});

Route::get('/home', function () {
    return view('1_home');
})->name('home');

Route::get('/about', function () {
    return view('2_about_');
})->name('about');

Route::get('/resume', function () {
    return view('3_resume');
})->name('resume');

Route::get('/project', function () {
    return view('4_project');
})->name('project');

Route::get('/contact', function () {
    return view('5_contact');
})->name('contact');
