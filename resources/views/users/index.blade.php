@extends('layouts.masterLayout')

@section('Title','Intranet')

@section('content')

<div class="row" style="padding: 20px 310px 50px;">
  <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">textsms</i>
          <input type="text" id="users" class="autocomplete">
          <label for="autocomplete-input">Pesquisar</label>
        </div>
      </div>
    </div>

<br>
<br>
<br>
<table class="striped" >
        <thead>
          <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach(App\User::all() as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

@endsection
