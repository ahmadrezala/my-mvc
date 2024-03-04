<?php

use App\Http\Controllers\UserController;
use Core\Router\web\Route;





Route::put('/' , [UserController::class , 'index']);