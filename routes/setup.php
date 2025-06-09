<?php

use BugLock\rolePermissionModule\Http\Controllers\settings\setup\AuthorizedController;
use Illuminate\Support\Facades\Route;

// ***** Admin login page *****
Route::get('/login',[AuthorizedController::class,'login'])->name('bugloocks.login');
