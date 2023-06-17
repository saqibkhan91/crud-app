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
}
