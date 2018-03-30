<?php

namespace App\Http\Controllers;

use App\parsing;
use Illuminate\Http\Request;

class ParsingController extends Controller
{
    //
    public function api()
    {
        return parsing::all();
    }
}
