<?php

//Route::get('/{any}', 'SinglePageController@index', function () {
//    ini_set('display_errors', 1);
//    restore_error_handler();
//    return view('welcome');
//})->where('any', '(.*)');

Route::get('/', function () {
    ini_set('display_errors', 1);
    restore_error_handler();
    return view('registration');
});

Route::post('/submit', 'FormController@userRegister');

//Route::prefix('api')->group(function () {
//    Route::post('/submit', function () {
//        redirect('/');
//    });
//});