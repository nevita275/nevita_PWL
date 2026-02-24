<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController
{
    public function show($id, $name) {
        return view('user', ['id' => $id, 'name' => $name]);
    }
}
