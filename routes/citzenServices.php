<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\CitzenServices\ServicesEdit;
use App\Livewire\Dashboard\CitzenServices\ServicesHome;
use App\Livewire\Dashboard\CitzenServices\ServicesIndex;
use App\Livewire\Dashboard\CitzenServices\ServicesResoucre;
 

 

Route::get('citzen-services-resouces',ServicesResoucre::class)->name('citzen.services.resouces');
Route::get('citzen-services-index',ServicesIndex::class)->name('citzen.services.index');
Route::get('citzen-services-home',ServicesHome::class)->name('citzen.services.home');
Route::get('citzen-services-edit/{id}',ServicesEdit::class)->name('citzen.services.edit')->middleware('auth'); 


 