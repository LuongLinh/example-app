<?php

namespace App\Http\UserControllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserControllers extends Controller
{
    public function store(Request $request) 
    {
        $data = $request->all();
        $user = User::create($data);

        
    }
}
