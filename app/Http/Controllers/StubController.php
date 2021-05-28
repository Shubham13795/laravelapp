<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StubController extends Controller
{
    // this is my stub customized controller
    public $textVar = '';
    function showData(Request $req){
        return 'this code';
    }
}
