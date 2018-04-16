

      </section>

    <section class="content">
    <div id="deleteModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
          <!-- Modal content-->
              <div class="modal-content">
                    <div class="modal-header" style="background-color:#930000;color:white">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 id="modalTitulo" class="modal-title">EditarUsuario</h4>
                    </div>
              <div class="modal-body">
                <h3>Esta seguro que desea eliminar este usuario?</h3>
                <form class="form-horizontal">
                  <input id="duserId" name="duserId" type="hidden">
                </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" onclick="btnEliminar()">Eliminar</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>

          </div>

    </div>
      <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      <div class="modal-content">
      <div id="modalHeader" class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modalTitulo" class="modal-title">EditarUsuario</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="index.php" method="POST" id="Form1" enctype="multipart/form-data">
        <input id="userId" name="userId" type="hidden">
          <input id="view" name="view" type="hidden" value="user">
            <input id="mode" name="mode" type="hidden" value="save">

                <div class="box-body">

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="tUsuario" name="user">
                    </div>
                    <label for="inputEmail3" class="col-sm-1 control-label">Email</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="tEmail" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="tNombre" placeholder="Nombre" name="nombre">
                    </div>
                    <label for="inputEmail3" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="tApellido" placeholder="Apellido" name="apellidos">
                    </div>
                  </div>
                  <div class="form-group">
                 <label for="exampleInputFile" class="col-sm-2 control-label">Imagen</label>
                 <input type="file" name="imagen">

               </div>
               <div class="form-group">
                 <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>

                 <div class="col-sm-4">
                   <input type="text" class="form-control" id="tTelefono" placeholder="ej.0000-0000" name="telefono">
                 </div>
                 <label for="inputEmail3" class="col-sm-1 control-label">Área</label>
                 <div class="col-sm-5">
                   <input type="text" class="form-control" id="tArea" placeholder="Area de Trabajo" name="area">
                 </div>
               </div>
               <div class="form-group">

                 <label for="inputEmail3" class="col-sm-2 control-label">Contraseña</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="tPassword" name="pass" placeholder="">
                 </div>
               </div>


                </div>

              </form>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-success" onclick="btnEnviar()">Guardar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>

</div>

      <div class="row">
        <div class="col-md-12">

          <!-- AREA CHART -->
          <div class="box box-info">


            <div class="box-header with-border">

              <h3 class="box-title">Tabla Temperatura</h3>
              <div>
                  <button type="button" class="btn btn-info" onclick="btnNuevo()">AGREGAR</button>
              </div>

              <div class="box-tools pull-right">

                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>

            </div>

            <div class="box-body">
              <table id="tablauser" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>UserName</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Area</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
    </section>

      <script src="views/app/js/datatables.net/jquery.dataTables.min.js"></script>
	<script src="views/app/js/datatables.net-bs/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->

      <script type="text/javascript">
      function btnEliminar()
      {
        var idusuario = $('#duserId').val();
        $.ajax({
            url:"index.php",
          mode:"POST",
          data:{
            "view":"user",
            "mode":"delete",
            "id":idusuario
          },
          success:function(data)
          {
                console.log(data);
                $("#deleteModal").modal('hide');
                CargarUsuarios();

          },
          error:function(data)
          {
            console.log(data);
          }
        });
      }
      function btnEnviar()
      {
          $('#Form1').submit();
          $("#editModal").modal('hide');
          CargarUsuarios();
      }
      function btnNuevo()
      {    var newContent = document.createTextNode("AgregarUsuario");
                $("#modalTitulo").empty();
                        vaciarCampos();
             $("#modalTitulo").append(newContent);
                $("#userId").val("-1");
                $("#modalHeader").css({"background-color":"#006a9d","color":"white"});
          $("#editModal").modal('show');
      }
      function btnEditar()
      {
        if($('#usesrId').val() == "-1"){

          var user = $('#tUsuario').val();
          var email = $('#tEmail').val();
          var nombre = $('#tNombre').val();
          var apellido = $('#tApellido').val();
          var pass = $('#tPassword').val();
          var user = $('#tUsuario').val();
          var imagen = document.getElementById("tImagen");
          var telefono = $('#tTelefono').val();
            var area = $('#tArea').val();

        $.ajax({
            url:"index.php",
          mode:"POST",
          data:{
            "view":"user",
            "mode":"save",
            "nombre":nombre,
            "apellidos":apellido,
            "user":user,
            "area":area,
            "telefono":telefono,
            "imagen":imagen
            }
          ,
          dataType:"json",
          success:function(data)
          {
            console.log(data);
          },
          error:function(data)
          {
            console.log(data);
          }
        });
      }
      else{
        alert("estas edutandi");
      /*  var userid = $('#userId').val()
        var user = $('#tUsuario').val();
        var email = $('#tEmail').val();
        var nombre = $('#tNombre').val();
        var apellido = $('#tApellido').val();
        var pass = $('#tPassword').val();
        var user = $('#tUsuario').val();
        var imagen = $('#tImagen').val();
        var telefono = $('#tTelefono').val();
          var area = $('#tArea').val();
      $.ajax({
          url:"index.php",
        mode:"POST",
        data:{
          "view":"user",
          "mode":"edit",
          "userID":userid,
          "nombre":nombre,
          "apellidos":apellido,
          "user":user,
          "area":area,
          "telefono":telefono,
          "imagen":imagen
          }
        ,
        dataType:"json",
        success:function(data)
        {
          console.log(data);
        },
        error:function(data)
        {
          console.log(data);
        }
      });*/
    }
    }


      function vaciarCampos()
      {
        $("#userId").val("");
        $('#tUsuario').val("");
        $('#tNombre').val("");
        $('#tApellido').val("");
        $('#tEmail').val("");
        $('#tArea').val("");
        $('#tTelefono').val("");
      }
      function CargarUsuarios()
      {
                        $.ajax({
                  type    : "GET",
                  url     : "index.php?view=user&mode=getAll",
                  dataType: "json",
                   success:function(data) {
                 console.log(data);
                 var table = $("#tablauser tbody");
                 table.empty();
                        $.each(data,function(i){
                        table.append("<tr><td>"+data[i].id+"</td><td>"+data[i].user+"</td><td>"+(data[i].nombre+" "+data[i].apellido)+"</td><td>"+data[i].email+"</td><td>"+data[i].area_trabajo+"</td><td><button id=e"+data[i].id+" class='btn btn-success' value="+data[i].id+" name='editar'>Editar</button><button id=d"
                        +data[i].id+" class='btn btn-danger' value="+data[i].id+" name='eliminar'>Eliminar</button></td></tr>");
                        $("#e"+data[i].id).attr("onclick", "").click(function(e) {
                          $.ajax({
                            type:"GET",
                            url:"index.php?view=user&mode=userGet&id="+e.target.value,
                            dataType:"json",
                            success:function(data)
                            {
                              console.log(data);
                                  vaciarCampos();
                                  $("#modalHeader").css({"background-color":"#006a2e","color":"white"});
                              var newContent = document.createTextNode("EditarUsuario");
                                      $("#modalTitulo").empty();
                                   $("#modalTitulo").append(newContent);
                              $("#userId").val(data[0].id);
                              $('#tUsuario').val(data[0].user);
                              $('#tNombre').val(data[0].nombre);
                              $('#tApellido').val(data[0].apellido);
                              $('#tEmail').val(data[0].email);
                              $('#tArea').val(data[0].area_trabajo);
                              $('#tTelefono').val(data[0].telefono);
                              $("#editModal").modal('show');
                            },
                            error:function(data)
                            {
                              console.log(data);
                            }
                          });
                        });
                          $("#d"+data[i].id).attr("onclick", "").click(function(e) {
                            $.ajax({
                              type:"GET",
                              url:"index.php?view=user&mode=userGet&id="+e.target.value,
                              dataType:"json",
                              success:function(data)
                              {
                                console.log(data);
                                if(data[0].permisos == 1)
                                {
                                  alert("Usted no puede eliminar este usuario");
                                  return;
                                }
                                else{
                                  $("#duserId").val(data[0].id);
                                  $("#deleteModal").modal('show');
                                }

                              },
                              error:function(data)
                              {
                                console.log(data);

                              }
                            });
                        });
                });
                }
                })
      }
      	$(document).ready(function(){
            CargarUsuarios();
        })

      </script>
