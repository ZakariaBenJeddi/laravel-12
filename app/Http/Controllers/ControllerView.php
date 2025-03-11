<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerView extends Controller
{
    public function ControllerView1(Request $request)
    {
        return view(
            "ControllerView",
            ["test" => $request->test]
        );
    }
}
