<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{ function index()
    {
        $nguoiDung= User::get();
        return view("hienthiuser",[
            "users" => $nguoiDung
        ]);
    }
    //

  function show($id)
  {
    //   $nguoiDung= User::where("id",$id)->first();
    //   return view("show",["user"=>$nguoiDung]);
    $nguoiDung= User::find($id);
      return view("show",["user"=>$nguoiDung]);
  }
}
