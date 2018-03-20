
      
    <h3>
      Generar
    </h3>  </section>
    <!-- Main content -->
    <section class="content">

      <!---------------------------------RowPrincipa------------------>
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Generar Informe</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tipo de Informe</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Gráfico</option>
                  <option>Tabla</option>
                  <option>PDF</option>
                </select>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                 <label>Sensor</label>
                  </br>
                  <input type="checkbox" class="minimal" value="1" id="c1"> Sensor Temperatura DHT11 </br>
                  <input type="checkbox" class="minimal" value="2" id="c2"> Sensor Ozono </br>
                  <input type="checkbox" class="minimal" value="3" id="c3"> Sensor PM 2.5 </br>
                  <input type="checkbox" class="minimal" value="4" id="c4"> Sensor Dióxido de Carbono </br>
                  <input type="checkbox" class="minimal" value="5" id="c5"> Sensor Nitrógeno </br>

              </div>
              <div class="form-group">
                <label>Seleccionar Día(s):</label>

                <!-- /.input group -->

              <div class="form-group">
                <input type="radio" name="r1" class="minimal">Día
                <input type="date" class="form-control" id="datepicker">
                <input type="radio" name="r1" class="minimal">Fechas
                <input type="date" class="form-control" id="datepicker">
                <input type="date" class="form-control" id="datepicker">
                 
          
              </div>
            </div>
            <button class="button" onclick="Generar()">Generar</button>
          
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
            </div>
            <!-- /.box-body -->
          </div>
           <!---------------------------------RowPrincipal------------------>


      
   <!-- SEGUNDO GRAFICO SENSOR -->
      <div class="row" id="">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary" id="generado">
           
        
          </div>
          <!-- /.box -->          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>

    
    </section>
      <script src="extlibs/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<script src="extlibs/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
	
      <script type="text/javascript">
      	$(document).ready(function(){
          /*Inicializar ichecks*/
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
      })

            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })



          /*Inicializar los datepickers
      $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )
*/
    //Date picker
      		var datos = {"sensor":"grafico_dht11","limit":"5"}
      				$.ajax({ 
  			 type    : "POST",
   			url     : "core/models/ultimos.php",
   			dataType: "json",
   			data: datos,           
	   success:function(data) {
   		 
   		 var table = $("#example1 tbody");
			    		$.each(data,function(i){
			        table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
			    });
			   }
			})
      		var dt = {"sensor":"grafico_mq7","limit":"5"}		
			$.ajax({ 
					  			 type    : "POST",
					   			url     : "core/models/ultimos.php",
					   			dataType: "json",
					   			data: dt,           
						   success:function(data) {
					   		 
					   		 var table = $("#example2 tbody");
					    		$.each(data,function(i){
					        table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
					    });
					   }
				})
			var dt3 = {"sensor":"grafico_mq131","limit":"5"}	
			$.ajax({ 
					  			 type    : "POST",
					   			url     : "core/models/ultimos.php",
					   			dataType: "json",
					   			data: dt3,           
						   success:function(data) {
					   		 
					   		 var table = $("#example3 tbody");
					    		$.each(data,function(i){
					        table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
					    });
					   }
				})
	
		});

        function Generar()
        {
          var select = [];
           $("input:checkbox:checked").each(function() {
             alert($(this).val());
             select.push($(this).val());

        });
           alert("Hay seleccionados"+select.length);
        }
      </script>