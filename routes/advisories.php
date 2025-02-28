<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Advisories\Edit;
use App\Livewire\Dashboard\Advisories\Index;
use App\Livewire\Dashboard\Advisories\Create;
use App\Livewire\Website\Pages\Advisories\AdvisoryList;
use App\Livewire\Website\Pages\Advisories\AdvisoryShow;

Route::prefix('/advisories')->name('advisories.')->middleware(['web'])->group(function() {
    
    Route::get('index',Index::class)->name('index');
    Route::get('create',Create::class)->name('create');
    Route::get('edit/{id}',Edit::class)->name('edit');
   
});


Route::get('advisories/list',AdvisoryList::class)->name('advisories.list');
Route::get('advisory/show/{id?}', AdvisoryShow::class)->name('advisory.show');
 