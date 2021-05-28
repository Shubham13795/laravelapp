<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // function index(){
    //     return DB::select('select name, address from employees');
    // }
    function showData(Request $req){
        
        // get api code
        // $data = Http::get('https://api.imgflip.com/get_memes');
        // return view('users',['collection'=>$data['data']['memes']]);
        // $file = $req->file('file');
        // $destination = storage_path('app').'/pdf/';
        // $filename = 'myfile'.'-'.date('Y-m-d-H:i:s').'.'.$file->getClientOriginalExtension();
        // return $file->move($destination,$filename);

        // save data in database
        // $user = new Employee;
        // $user->name = $req->name;
        // $user->address = $req->address;
        // $user->salary = $req->salary;
        // $user->save();
        // $req->session()->flash('name',$req->input('name')); //flash session for form subbmition message
        // return redirect('users');

        // fetch data from DB and Paginate
        $data = Employee::paginate(3);

        return view('list',['Employees'=>$data]);
    }

    // Database CRUD functions

    function dataList(){
        $data = Employee::all();
        return view('list',['Employees'=>$data]);
    }

    function dataDelete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect('list');
    }

    function dataEdit($id){
        $data = Employee::find($id);
        return view('edit',['data'=>$data]);
    }

    function dataUpdate(Request $req){
        $data = Employee::find($req->id);
        $data->name = $req->name;
        $data->address = $req->address;
        $data->salary = $req->salary;
        $data->save();
        return redirect('list');

    }


}
