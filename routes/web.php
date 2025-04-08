<?php

use App\Http\Controllers\Guest\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::group(['as'=>'guest.'],function(){

    Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');

});
