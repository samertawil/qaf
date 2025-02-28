<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\library\Edit;
use App\Livewire\Dashboard\library\Index;
use App\Livewire\Dashboard\library\Create;
use App\Livewire\Website\Pages\Library\BookShow;
use App\Livewire\Website\Pages\library\BooksList;


Route::prefix('/library')->name('library.')->middleware(['web'])->group(function () {
    // libraries
    Route::get('index', Index::class)->name('index');
    Route::get('create', Create::class)->name('create');
    Route::get('edit/{id}', Edit::class)->name('edit');
});

Route::get('books/list', BooksList::class)->name('books.list');

Route::get('book/show/{id?}', BookShow::class)->name('book.show');


