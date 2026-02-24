<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', function ($name='Nevita') {
return 'Nama saya '.$name;
});
