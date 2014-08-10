<?php

Route::post("login", [
     'as' => 'login',
     'uses' => 'SessionsController@store'
]);