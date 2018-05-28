<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('login.index');
    }
    public function login(Request $req)
    {
      $dados = $req->all();
      if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['password']])){
        return redirect()->route('dashboard');
      }

      return redirect()->route('login');
    }
    public function logout()
  {
    Auth::logout();
    return redirect()->route('login');
  }
}
