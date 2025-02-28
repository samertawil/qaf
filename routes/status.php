<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\StatusModule\StatusClass;
 


Route::get('/status', StatusClass::class)->name('status');


