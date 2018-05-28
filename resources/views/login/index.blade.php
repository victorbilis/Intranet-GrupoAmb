@include('layouts._head')
<div class="blue">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
      </div>
  </div>
<div class="container">

    <div class="row">
      <p class="z-depth-1">
        <div class="col s12 m12">

                <div class="panel-heading">
                    <h3 class="panel-title">Intranet</h3>
                </div>

                  <form action="{{route('login.enter')}}" method="post">
                    {{csrf_field()}}
                    <div class="input-field">
                      <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                      <input type="password" name="password" placeholder="Senha">
                    </div>

                    <button class="btn btn-success">Entrar</button>
                  </form>


        </div>
        </p>
    </div>
  </div>
