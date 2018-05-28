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


<script type="text/javascript">
$(document).ready(function() {
  M.updateTextFields();
  $('.sidenav').sidenav();
  $('.fixed-action-btn').floatingActionButton();
  $('select').formSelect();

});
document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.fixed-action-btn');
   var instances = M.FloatingActionButton.init(elems, {
     direction: 'top',
     hoverEnabled: false
   });
   });
</script>
</body>
</html>
