<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    //

    public function posfind(Request $request)
    {
        $positions = Position::all()->where('group_id', '=', $request->group_id);

        return response()->json(['positions' => $positions]);
    }
}
