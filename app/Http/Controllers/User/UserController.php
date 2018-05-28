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
}
