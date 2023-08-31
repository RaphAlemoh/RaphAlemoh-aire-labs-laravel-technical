<?php

use Illuminate\Support\Facades\Route;



use App\Livewire\Testimonies;
 
Route::get('/testimonies', Testimonies::class);

Route::get('/', function () {
    return view('welcome');
});
