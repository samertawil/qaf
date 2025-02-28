<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Dashboard\Uilogin\Login;
use App\Livewire\Dashboard\Uilogin\Register;
use App\Livewire\Dashboard\Uilogin\ChangePassword;
use App\Livewire\Dashboard\Uilogin\ForgetPassword;
use App\Livewire\Dashboard\Uilogin\LogoutController;
use App\Livewire\Dashboard\TechnicalSupport\TechSupportCreate;

 
 
Route::middleware(['web'])->group(function () {

    Route::get('login', Login::class)->name('login');
       
    Route::get('register', Register::class)->name('register');

  
    Route::get('password/change/{userId?}', ChangePassword::class) ->name('password.change');
    
    Route::get('forget-password', ForgetPassword::class)->name('uilogin.forgetpassword');
	
	 Route::post('logout', LogoutController::class)
        ->name('logout');
    
    Route::get('uilogin-home',function() {
        return view('livewire.ui_auth.uilogin-home');
    })->name('uilogin.home');
});
 
       


Route::prefix('support/')->middleware(['web'])->name('support.')->group(function() {
    Route::get('create',TechSupportCreate::class)->name('create');
});

