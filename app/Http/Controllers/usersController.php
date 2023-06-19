<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class usersController extends Controller
{
    function testRequest(Request $req){
        $Users= new Users;
        $Users->name = $req->Username;
        $Users->email = $req->email;
        $Users->password = $req->password;
        $Users->save();
        return redirect('/');
    }
    function list(){
        $data = users::all();
        return view('list',['users'=>$data]);

    }
    function delete($id){
        $data = users::find($id);
        $data->delete();
        return redirect('/');
    }
    function showData($id){
        $data = users::find($id);
        return view('edit',['data'=>$data]);
    }
    function  editData(request $req){
        $data = users::find($req->id);
        $data->name = $req->Username;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->save();
        return redirect('/');
    }
}
