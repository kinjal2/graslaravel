<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class Requestquarter extends Controller
{
    //
    public function requesthighercategory()
    { $usermaster='';
        return view('request/highercategory', ['users' => $usermaster]);
    }
}
