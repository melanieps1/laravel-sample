<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('/portfolio/js/weather', function () {
	// Approach one for passing parameters into the view - supply values as variables
	// $default = '80301';
	// return view('js-weather.index', ['default' => $default]);

	// Approach two - The ['default' => ...] passes in the variable 'default' for the placeholder in index.blade.php
  return view('js-weather.index', ['default' => '80301']);

  // Approach three - Shortcut with compact
  // $default = '80301';
  // return view('js-weather.index', compact('default'));
});