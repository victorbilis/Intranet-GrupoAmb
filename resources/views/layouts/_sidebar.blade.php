
<nav>
  <div class="nav-wrapper blue darken-3">

  <ul class="right hide-on-med-and-down">
    <li><a href="badges.html"><i class="material-icons right">settings</i>Configurações</a></li>
    <li><a href="badges.html"><i class="material-icons right">person</i>Minha conta</a></li>
    <li><a href="{{route('logout')}}"><i class="material-icons right">exit_to_app</i>Sair</a></li>
  </ul>
</div>
</nav>
<ul id="slide-out" class="sidenav sidenav-fixed">
  <li><div class="user-view">
      <div class="background blue darken-3">
      </div>
      <a href="#user"><img class="circle" src="{{asset('/imgs/user.png')}}"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">dashboard</i>Painel</a></li>
    <li><a href="#!"><i class="material-icons">people</i>Usuários</a></li>
    <li><a href="#!"><i class="material-icons">comment</i>Recados</a></li>
    <li><a href="#!"><i class="material-icons">contact_phone</i>Ramais</a></li>
  </ul>
