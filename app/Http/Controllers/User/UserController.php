<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
  public function buscar(Request $req)
  {
      $user_date = $req->all();
      $users = User::all();
      $result = [];

      foreach ($users as $user) {
              $result[] = $user['name'];
      }
      return response()->json($result);
  }
  public function index()
  {
    return view('users.index');
  }

  public function search(Request $req)
  {
    $dados = $req->all();

    $user = "";

    if($dados['filter'] == 1)
    {
      $user = User::where('id','like','%'.$dados['search'].'%');
    }
    else if($dados['filter'] == 2)
    {

      $user = User::where('name','like','%'.$dados['search'].'%');
    }
    else if($dados['filter'] == 3)
    {

      $user = User::where('email','LIKE','%'.$dados['search'].'%');
    }

    return view('users.index')->with(['users'->$user->get()]  );

  }
}
