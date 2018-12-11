<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Seção de Informática | Governo Municipal de Centenário do sul & P R Spiguel Tecologia</a>.</strong> Todos os direitos Reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Atividades Recentes</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">Configurações Gerais</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED JS SCRIPTS -->

 <!-- jQuery 2.2.3 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
   <script src="../../res/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <!-- Bootstrap 3.3.6 -->
   <script src="../../res/admin/bootstrap/js/bootstrap.min.js"></script>
   <!-- AdminLTE App -->
   <script src="../../res/admin/dist/js/app.min.js"></script>

   <script type="text/javascript" charset="utf-8" async defer>
 
  //################ TECLAS DE ATALHO #####################
  shortcut.add("Right",function() 
  {
    alert("Foi pressionado a seta para a direita!");
  });

  shortcut.add("F9",function() 
  {
     window.location.href="/admin/deliveries/create";
  });

  //################ MODAL #####################
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var recipientdeskid = button.data('whateverdeskid')  
    var recipientdtbirthday = button.data('whateverdtbirthday')
    var recipientperson = button.data('whateverperson')
    var recipientnrphone = button.data('whatevernrphone')
    var recipientemail = button.data('whateveremail')
    var recipientpublicplace = button.data('whateverpublicplace')
    var recipientnrnumber = button.data('whatevernrnumber')
    var recipientregion = button.data('whateverregion')
    var recipientcity = button.data('whatevercity')
    var recipientstate = button.data('whateverstate')
    var recipientcountry = button.data('whatevercountry')
    var recipientcomplement = button.data('whatevercomplement')
    //document.write(recipientemail)
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Detalhes: ID ' + recipient)
    modal.find('#id-curso').val(recipient)
    modal.find('#deskid').val(recipientdeskid)
    modal.find('#dtbirthday').val(recipientdtbirthday)
    modal.find('#recipient-person').val(recipientperson)
    modal.find('#nrphone').val(recipientnrphone)
    modal.find('#email').val(recipientemail)
    modal.find('#publicplace').val(recipientpublicplace)
    modal.find('#nrnumber').val(recipientnrnumber)
    modal.find('#region').val(recipientregion)
    modal.find('#city').val(recipientcity)
    modal.find('#state').val(recipientstate)
    modal.find('#country').val(recipientcountry)
    modal.find('#complement').val(recipientcomplement)
    /*FUNÇÃO PARA ALTER O ACTION DO FORMULARIO*/
    $('#updateButton').click(function(){
      $('#modalForm').attr('action', '/admin/deliveries/' + recipient);
    });
  })

// INICIO FUNÇÃO ORDENA TABELA DELIVERIES
$(function(){
$('table#myTable tbody tr').hover(
function(){

$(this).addClass('destaque');
},
function(){
$(this).removeClass('destaque');
}
);
})
// INICIO FUNÇÃO CALCULA IDADE
$("#dtbirthday").on('blur', function() {
calcular_idade();
});
// INICIO FUNÇÃO DE PERQUISA REGISTROS NO BANCO DEMANDS
$("#dtpassword").on('change', function() {
contaRegistros();
});
//MOSTRA/OCULTA
$('.mostraClass').click(function(){
$(this).find('i').toggleClass('fa-minus-circle fa-plus-circle')
});
//FUNÇÃO MOSTRA/OCULTA
function mostra(id){
if(document.getElementById(id).style.display == 'flex'){
document.getElementById(id).style.display = 'none';
}else{ document.getElementById(id).style.display = 'flex';}
}

// INICIO FUNÇÃO DE MOSTRA ORGÃO EMISSOR
window.onload=function(){
var campoRG = document.getElementById('destypedoc').value;
var display = campoRG == 'RG' ? 'block' : 'none';
document.getElementById('hidden_div').style.display = display;


document.getElementById('destypedoc').addEventListener('change', function () {
var style = this.value == 'RG' ? 'block' : 'none';
document.getElementById('hidden_div').style.display = style;
});
}
// INICIO FUNÇÃO DE MASCARA MAIUSCULA
var ignorar = ["das", "dos", "e", "é", "do", "da", "de"];

function caixaAlta(string) {
return String(string).toLowerCase().replace(/([^A-zÀ-ú]?)([A-zÀ-ú]+)/g, function(match, separator, word) {
if (ignorar.indexOf(word) != -1) return separator + word;
return separator + word.charAt(0).toUpperCase() + word.slice(1);
});
}
function corrigirValor(el) {
el.value = caixaAlta(el.value);
}
// INICIO FUNÇÃO DE MASCARA MAIUSCULA
function maiuscula(z){
v = z.value.toUpperCase();
z.value = v;
}

</script>

</body>
</html>