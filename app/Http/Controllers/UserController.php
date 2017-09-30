<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function update($id,Request $request)
    {
        $user = User::find($id);


        if ($request->name)
            $user->name = $request->name;

        if ($request->email)
            $user->email = $request->email;

        if($request->pos_id)
            $user->pos_id = $request->pos_id;

        return redirect('/home');
    }
}
