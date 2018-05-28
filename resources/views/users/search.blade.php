@extends('layouts.masterLayout')

@section('Title','Intranet')

@section('content')

<div class="row" style="padding: 20px 310px 50px;">
  <form action="{{route('users.search')}}" method="post" enctype="multipart/form-data">
  <div class="col s12">
      <div class="row">
        <div class="input-field col s4">
          {{csrf_field()}}
          <i class="material-icons prefix">textsms</i>
          <input id="search" name="search" type="text" class="validate">
          <label for="search">Pesquisar</label>
        </div>
        <div class="input-field col s4">
        <select name="filter">
          <option value="" disabled selected>Escolha uma opção</option>
          <option value="1">Código</option>
          <option value="2">Nome</option>
          <option value="3">Email</option>
        </select>
        <label for="search">Filtrar</label>
      </div>
      <div class="input-field col s4">
        <button class="btn btn-success">Filtrar</button>
      </div>
      </div>
    </div>
  </form>

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
          @foreach($users as $user)
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
