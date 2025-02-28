<?php

 

use Illuminate\Support\Facades\Route; 
use App\Livewire\Dashboard\UserModule\UserIndex;
use App\Livewire\Dashboard\UserModule\UserCreate;
 
 


Route::get('/users/index', UserIndex::class)->name('user.index');
Route::get('/users/create', UserCreate::class)->name('user.create');
 
 


