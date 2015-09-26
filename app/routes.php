<?php

Route::get('/', array('uses' => 'HomeController@showHomePage'));
Route::get('/login', array('uses' => 'LoginController@showLoginPage'));