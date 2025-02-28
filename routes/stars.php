<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\stars\Edit;
use App\Livewire\Dashboard\stars\Index;
use App\Livewire\Dashboard\stars\Create;


Route::prefix('/stars')->name('stars.')->middleware(['web'])->group(function() {
    
     Route::get('index',Index::class)->name('index');
     Route::get('create',Create::class)->name('create');
     Route::get('edit/{id}',Edit::class)->name('edit');
    
});
