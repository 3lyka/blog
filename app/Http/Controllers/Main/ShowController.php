<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function __invoke(Request $request)
    {
        return view('main.show');
    }
}
