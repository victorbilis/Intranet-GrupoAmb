<div class="fixed-action-btn">
  <a class="btn-floating btn-large deep-blue">
    <i class="large material-icons">add</i>
  </a>
  <ul>
    <li title="Usuários"><a href="{{route('users')}}" class="btn-floating red"><i class="material-icons">people</i></a></li>
    <li title="Recados"><a class="btn-floating green"><i class="material-icons">comment</i></a></li>
    <li title="Notícias"><a class="btn-floating blue"><i class="material-icons">notifications</i></a></li>
    <li title="Cardápio"><a class="btn-floating teal"><i class="material-icons">restaurant</i></a></li>
  </ul>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<script src="http://demo.expertphp.in/js/jquery.js"></script>
<script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.fixed-action-btn');
   var instances = M.FloatingActionButton.init(elems, {
     direction: 'top',
     hoverEnabled: false
   });

  $(document).ready(function() {
    Materialize.updateTextFields();
    $('.sidenav').sidenav();
    $('.fixed-action-btn').floatingActionButton();

    });

    $(document).ready(function(){
       $('#users').autocomplete(function () {
           var q=$(this).val();
           if(q.length>3) {

               $.ajax
               ({
                   type: "GET",
                   url: "{{url('/User/Dados')}}",
                   data: {q:q},
                   contentType: "json",
                   cache: false,
                   success: function(json)
                   {
                       $('#users').val(json[1].value);
                   }

               });
           }
       });

    });


  var instance = M.FloatingActionButton.getInstance(elem);
  instance.open();


  });

</script>
</body>
</html>
