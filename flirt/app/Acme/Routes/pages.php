<?php

/*
  |--------------------------------------------------------------------------
  | PAGES ROUTE
  |--------------------------------------------------------------------------
  |
  | [GET]  | /
  | [GET]  | faq
  | [GET]  | kundensupport
  | [GET]  | agb
  | [GET]  | datenschutz
  | [GET]  | impressum
  |-------------------------------------------------------------------------
 */

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('faq', function() {
    return View::make('pages.faq');
});

Route::get('kundensupport', function() {
    return View::make('pages.kundensupport');
});

Route::get('agb', function() {
    return View::make('pages.agb');
});

Route::get('datenschutz', function() {
    return View::make('pages.datenschutz');
});

Route::get('impressum', function() {
    return View::make('pages.impressum');
});
