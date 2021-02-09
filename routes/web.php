<?php

Route::group([
    'prefix' => '/',
], function () {
    $main = "App\Http\Controllers\Controle";
    Route::get('/', ['as' => 'controle.home', 'uses' => "$main\HomeController@home"]);
});