

      Graficos</section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Tabla Temperatura</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Lectura No.</th>
                  <th>Valor</th>
                  <th>Fecha</th>
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

       <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Tabla Húmedad</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Lectura No.</th>
                  <th>Valor</th>
                  <th>Fecha</th>
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
   <!-- SEGUNDO GRAFICO SENSOR -->
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tabla CO2</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Lectura No.</th>
                  <th>Valor</th>
                  <th>Fecha</th>
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

      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tabla O3</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Lectura No.</th>
                  <th>Valor</th>
                  <th>Fecha</th>
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
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tabla PM2.5</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table id="tablapm2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Lectura No.</th>
                  <th>Valor</th>
                  <th>Fecha</th>
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
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Tabla PM10</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table id="tablapm10" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Lectura No.</th>
                  <th>Valor</th>
                  <th>Fecha</th>
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
      <script src="views/app/js/datatables.net/jquery.dataTables.min.js"></script>
	<script src="views/app/js/datatables.net-bs/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->

      <script type="text/javascript">
      	$(document).ready(function(){
      		var datos = {"sensor":"sensorT","limit":"5"}
      				$.ajax({
  			 type    : "POST",
   			url     : "core/models/lecturas/ultimos.php",
   			dataType: "json",
   			data: datos,
	   success:function(data) {
   		 console.log(data);
   		 var table = $("#example1 tbody");
			    		$.each(data,function(i){
			        table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
			    });
			   }
			})
          var datosh = {"sensor":"sensorH","limit":"5"}
              $.ajax({
         type    : "POST",
        url     : "core/models/lecturas/ultimos.php",
        dataType: "json",
        data: datosh,
     success:function(data) {
       console.log(data);
       var table = $("#example2 tbody");
              $.each(data,function(i){
              table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
          });
         }
      })
      		var dt = {"sensor":"sensorDx","limit":"5"}
			         $.ajax({
					  			 type    : "POST",
					   			url     : "core/models/lecturas/ultimos.php",
					   			dataType: "json",
					   			data: dt,
						   success:function(data) {

					   		 var table = $("#example3 tbody");
					    		$.each(data,function(i){
					        table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
					    });
					   }
				})
			var dt3 = {"sensor":"sensorOz","limit":"5"}
			$.ajax({
					  			 type    : "POST",
					   			url     : "core/models/lecturas/ultimos.php",
					   			dataType: "json",
					   			data: dt3,
						   success:function(data) {

					   		 var table = $("#example4 tbody");
					    		$.each(data,function(i){
					        table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
					    });
					   }
				})
       var dt4 = {"sensor":"sensorPm","limit":"5"}
      $.ajax({
                   type    : "POST",
                  url     : "core/models/lecturas/ultimos.php",
                  dataType: "json",
                  data: dt4,
               success:function(data) {

                 var table = $("#tablapm2 tbody");
                  $.each(data,function(i){
                  table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
              });
             }
        })
        var dt5 = {"sensor":"sensorPm1","limit":"5"}
      $.ajax({
                   type    : "POST",
                  url     : "core/models/lecturas/ultimos.php",
                  dataType: "json",
                  data: dt5,
               success:function(data) {

                 var table = $("#tablapm10 tbody");
                  $.each(data,function(i){
                  table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
              });
             }
        })
	/*		$('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })	*/
		});


				var myVar = setInterval(function(){ actualizartablas() }, 3000);

		function actualizartablas() {
			 /*$("#example2 tbody > tr").remove();
			  $("#example1 tbody > tr").remove();
			  var datos = {"sensor":"grafico_dht11"}
      				$.ajax({
  			 type    : "POST",
   			url     : "core/models/lecturas/ultimos.php",
   			dataType: "json",
   			data: datos,
	   success:function(data) {

   		 var table = $("#example1 tbody");
			    		$.each(data,function(i){
			        table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
			    });
			   }
			})
      		var dt = {"sensor":"grafico_mq7"}
			$.ajax({
  			 type    : "POST",
   			url     : "core/models/lecturas/ultimos.php",
   			dataType: "json",
   			data: dt,
	   success:function(data) {

   		 var table = $("#example2 tbody");
    		$.each(data,function(i){
        table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
    });
   }
})

*/

		}

      </script>
