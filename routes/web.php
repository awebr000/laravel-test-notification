<?php

use App\User;
use App\Notifications\testNotification;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function() {
    User::find(1)->notify(new testNotification());
});
