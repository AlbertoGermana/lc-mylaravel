<?php
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});
Route::get('/home2', function () {

  $max = 100;

  return view('home2', compact('max'));
});
