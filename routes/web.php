<?php
 
use App\Livewire\Test;
use Livewire\Livewire;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Cards\Create;
use App\Livewire\Dashboard\Cards\Resource;
use App\Livewire\Website\IndexSections\Index;
use App\Livewire\Website\Pages\AboutUs\AboutUs;
use App\Livewire\Website\Pages\Academy\Academy;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('test',Test::class);
// Route::view('test','test');
Route::view('hosbital','hosbital');
 
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    
    function () {
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });
    
        Route::post('/logout', function () {
            return 'code is here';
        })->name('logout');

        Route::post('/home', function () {
            return 'code is here';
        })->name('home');

        Route::get('dashboard', Dashboard::class)->name('dashboard.home')->middleware('auth');



        Route::get('dashboard/cards/create', Create::class);

        Route::get('dashboard/cards/resource', Resource::class)->name('website.card.resource');
 

        include __DIR__.'/uiauth.php';
        
        include __DIR__.'/user.php';

        include __DIR__.'/setting.php';
        
        include __DIR__.'/status.php';
          
        include __DIR__.'/permission.php';
        
        include __DIR__ . '/citzenServices.php';
        
        include __DIR__ . '/mediaPrograms.php';

        include __DIR__ . '/stars.php';

        include __DIR__ . '/advisories.php';
        
        include __DIR__ . '/library.php';
        
        include __DIR__ . '/reels.php';


        Route::view('/reels12', 'reels');


        Route::get('/', Index::class)->name('website');

        Route::get('about-us', AboutUs::class)->name('about');

        Route::get('academy',Academy::class)->name('academy');
        
    }
);
