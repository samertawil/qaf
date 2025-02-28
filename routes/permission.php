<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\Role\RoleEdit;
use App\Livewire\Dashboard\Role\RoleCreate;
use App\Livewire\Dashboard\Role\RoleResource;
use App\Livewire\Dashboard\Ability\AbilityResource;
use App\Livewire\Dashboard\RoleModuleName\ModuleResource;
use App\Livewire\Dashboard\UserRolesModules\UserRoleCreate;
 


Route::prefix('/ability')->name('ability.')->middleware(['web'])->group(function() {
    
    Route::get('index',AbilityResource::class)->name('index');
    Route::get('module-index',ModuleResource::class)->name('module.index');
    
});


Route::prefix('/role')->name('role.')->middleware(['web'])->group(function() {
    
    Route::get('create/{id?}',RoleCreate::class)->name('create');
    Route::get('index',RoleResource::class)->name('index');
    Route::get('abilities/update/{id?}',RoleCreate::class)->name('update');
    Route::get('abilities/edit/{id?}',RoleEdit::class)->name('edit');
    
});

Route::prefix('/user-roles')->name('user-roles.')->middleware(['web'])->group(function() {
    
    Route::get('create/{userID?}',UserRoleCreate::class)->name('create');
    
});