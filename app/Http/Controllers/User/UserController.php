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

    $query = "";

    if($dados['filter'] == 1)
    {
      $query = User::where('id','LIKE','%'.$dados['search'].'%')->get();
    }
    else if($dados['filter'] == 2)
    {
      $query = User::where('name','LIKE','%'.$dados['search'].'%')->get();
    }
    else if ($dados['filter'] == 3)
    {
      $query = User::where('email','LIKE','%'.$dados['search'].'%')->get();
    }

    echo $query->id;

    //return view('users.search',compact('users'));

  }
}
