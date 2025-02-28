<?php

 
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Programs\Edit;
use App\Livewire\Dashboard\ProgramEpisodes\Edit as EpisodesEdit;
use App\Livewire\Dashboard\Programs\Index;
use App\Livewire\Dashboard\Programs\Create;
use App\Livewire\Website\Pages\Episodes\EpisodeShow;
use App\Livewire\Website\Pages\Episodes\EpisodesList;
use App\Livewire\Website\Pages\Programs\ProgramsList;
use App\Livewire\Dashboard\ProgramEpisodes\Index as ProgramEpisodesIndex;
use App\Livewire\Dashboard\ProgramEpisodes\Create as ProgramEpisodesCreate;

Route::prefix('/programs')->name('programs.')->middleware(['web'])->group(function () {

     Route::get('index', Index::class)->name('index');
     Route::get('create', Create::class)->name('create');
     Route::get('edit/{id}', Edit::class)->name('edit');
});

Route::get('programs/list', ProgramsList::class)->name('programs.list');

Route::prefix('/program-episodes')->name('program.episodes.')->middleware(['web'])->group(function () {

     Route::get('index', ProgramEpisodesIndex::class)->name('index');
     Route::get('create', ProgramEpisodesCreate::class)->name('create');
     Route::get('edit/{id}', EpisodesEdit::class)->name('edit');
 
});


Route::get('episodes/list/{programName}', EpisodesList::class)->name('episodes.list');

Route::get('episode/show/{id?}', EpisodeShow::class)->name('episode.show');

