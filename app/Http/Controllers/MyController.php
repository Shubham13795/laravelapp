<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    // Update Data in database using query builder
    function operations(){
        return DB::table('employees')
        ->join('users','employees.id','=','users.emp_id')
        ->where('users.emp_id','4')
        ->select('users.*')
        ->get();
    }

}
