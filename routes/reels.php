<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Reels\Edit;
use App\Livewire\Dashboard\Reels\Index;
use App\Livewire\Dashboard\Reels\Create;
use App\Livewire\Website\Pages\Reels\ReelsList;
 
 

Route::prefix('/reels')->name('reels.')->middleware(['web'])->group(function () {

     Route::get('index', Index::class)->name('index');
     Route::get('create', Create::class)->name('create');
     Route::get('edit/{id}', Edit::class)->name('edit');
});

Route::get('reels/list', ReelsList::class)->name('reels.list');
