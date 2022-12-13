<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Показать профиль конкретного пользователя.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    { 
        return view('user.profile', [
            'userObj' => User::findOrFail($id)
        ]);
    }
}