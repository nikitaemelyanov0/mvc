<?php

Route::get('/', [MainController::class, 'indexGet']);

Route::get('/registration', [UserController::class, 'registrationGet']);
Route::post('/registration', [UserController::class, 'registrationPost']);

Route::get('/authorization', [UserController::class, 'authorizationGet']);
Route::post('/authorization', [UserController::class, 'authorizationPost']);

Route::get('/calc-ndfl', [TestController::class, 'ndflGet']);
Route::post('/calc-ndfl', [TestController::class, 'ndflPost']);