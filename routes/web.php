<?php

use App\Http\Controllers\UserController;
use Core\Router\web\Route;





Route::get('/' , [UserController::class , 'index']);