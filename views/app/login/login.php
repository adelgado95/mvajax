  <?php
  	include(HTML_DIR.'overall/header.php');
  ?>
  <body style="background-image: url('views/app/images/hero-bg.jpg')">
  <div id="registro" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div id="_AJAX_LOGIN_">

              </div>
              <div class="modal-header modal-info">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Iniciar Sesión</h4>
              </div>
              <div class="modal-body">
              <form role="form" onkeypress="return runScriptLogin(event)">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Usuario o Email</label>
                  <input type="text" class="form-control" id="user_login" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Clave</label>
                  <input type="password" class="form-control" id="pass_login" placeholder="Password">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button" class="btn btn-info" onclick="goLogin()">Entrar</button>
            <!--    <button type="submit" class="btn btn-primary">Submit</button>-->
              </div>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" onclick="cerrar()">Cerrar</button>

              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

  </body>
 
        <script src="extlibs/admin/bower_components/jquery/dist/jquery.min.js"></script>
        </script>

        <script type="text/javascript">
          function cerrar()
          {
              window.location.href = "index.php?view=as";
          }


        function goLogin()
        {
          user = __('user_login').value;
          pass = __('pass_login').value;
          $.ajax({
            url: "ajax.php?mode=login",
            method: "POST",
            data:{
              "user":user,"pass":pass,"session":1
            },
            success: function(data) {
              if(data == 1){
                  $("#_AJAX_LOGIN_").empty();
                result = '<div class="alert alert-dismissible alert-success">';
                result += '<button type="button" class="close" data-dismiss="alert">x</button>';
                result += '<h4>Conectado!</h4>';
                result += '<p><strong>Estamos redireccionando</strong></p>';
                result += '</div>';
              $("#_AJAX_LOGIN_").append(result);
                window.location.href = "index.php?view=admin";
                console.log("Redireciconando a admin");
              }
              else{
                  $("#_AJAX_LOGIN_").empty();
                result = '<div class="alert alert-dismissible alert-danger">';
                result += '<button type="button" class="close" data-dismiss="alert">';
                result += 'x</button><h4>Error</h4><p><strong>Las credenciales son incorrectas</strong></p></div>';
                $("#_AJAX_LOGIN_").append(result);
              }
            },
            error: function(data) {
                $("#_AJAX_LOGIN_").empty();
              result = '<div class="alert alert-dismissible alert-warning>';
              result += '<button type="button" class="close" data-dismiss="alert">x</button>';
              result += '<h4>No entro</h4>';s
              result += '<p><strong>Estamos intentando</strong></p>';
              result += '</div>';
              $("#_AJAX_LOGIN_").append(result);
            }
            });
        }
      function runScriptLogin(e)
      {
        if(e.keyCode == 13)
        {
          goLogin();
        }
      }
        </script>
