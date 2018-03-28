
      
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
                <select class="form-control select2" id="tipoSelect" style="width: 100%;">
                  <option selected="selected">GRAFICO</option>
                  <option>TABLA</option>
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
                  <input type="checkbox" class="minimal" value="sensorT" id="c1"> Sensor Temperatura DHT11 </br>
                  <input type="checkbox" class="minimal" value="sensorOz" id="c2"> Sensor Ozono </br>
                  <input type="checkbox" class="minimal" value="sensorPm" id="c3"> Sensor PM 2.5 </br>
                  <input type="checkbox" class="minimal" value="sensorDx" id="c4"> Sensor Dióxido de Carbono </br>
                  <input type="checkbox" class="minimal" value="sensorT" id="c5"> Sensor Nitrógeno </br>

              </div>
              <div class="form-group">
                <label>Seleccionar Día(s):</label>

                <!-- /.input group -->

              <div class="form-group">
                <label >
                    <input type="radio" name="radiofecha" id="r1" class="minimal">Día  
                </label>
                <input type="text" class="form-control" id="datepickerD">
                <label >
                    <input type="radio" name="radiofecha" id="r2" class="minimal">Fechas  
                </label>
                <input type="text" class="form-control" id="datepickerS">
              </br>
                <input type="text" class="form-control" id="datepickerE">
                 
                
              </div>
            </div>
            <button class="button" onclick="Generar()">Generar</button>
          
        <!-- /.box-body -->
    
      </div>
            </div>
            <!-- /.box-body -->
          </div>
           <!---------------------------------RowPrincipal------------------>


      
   <!-- SEGUNDO GRAFICO SENSOR -->
    <section >
      <div class="row" id="">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-body" id="tab">
                 
            </div>
          </div>
          <!-- /.box -->          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
</section>
    
    </section>
      <script src="extlibs/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<script src="extlibs/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="views/app/js/jspdf.js"></script>
  <script src="views/app/js/standard_fonts_metrics.js"></script>
  <script src="views/app/js/split_text_to_size.js"></script>
  <script src="views/app/js/jspdf.debug.js"></script>
  <script src="views/app/js/jspdf.plugin.autotable.min.js"></script>

  <script src="views/app/js/datatables.net/jquery.dataTables.min.js"></script>
    <script src="views/app/js/datatables.net-bs/dataTables.bootstrap.min.js"></script>

    <script src="views/app/js/moment/min/moment.min.js"></script>
<script src="views/app/js/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="views/app/js/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="views/app/css/iCheck/icheck.min.js"></script>
<!-- bootstrap color picker -->


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

  });
         $('#datepickerD').datepicker({
      autoclose: true
    })
         $('#datepickerS').daterangepicker()
    //Date range picker with time picker
    //Date range as a button
   

    //Date picker
   



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
     
      	


          /*---------Segundo AJAX--------------*/
			 

        function Generar()
        {

           
          var select = [];
          console.log(select.length);
           $("input:checkbox:checked").each(function() {
             select.push($(this).val());
           }
           );
           if(select.length == 0)
           {
            console.log(select.length);
              alert("POR FAVOR SELECCIONE UN SENSOR");
              
             return;
           }
           alert(select[0]);
           if(select.length == 1){
               if($('#tipoSelect :selected').text() == "GRAFICO")
               {
                  generargrafico(select[0]);
               }
                if($('#tipoSelect :selected').text() == "PDF")
               {
                  GenerarPDF(select[0]);
               }
               if($('#tipoSelect :selected').text() == "TABLA")
               {
                  generarTabla(select[0]);
               }
           }
           else
           {

           }
           console.log("Has seleccionado los sensores");
           var sensor;
           for(sensor in select)
           {
              alert(select[sensor]);
              console.log(select[sensor]);
           }

        }
        function ir()
        {
              $('html, body').animate({
            scrollTop: $("#tab").offset().top
               }, 2000);
        }
        function generargrafico(valor)
        {
              
                       $.ajax({
                     url: "core/models/ultimos.php",
                    method: "POST",
                    data:{"sensor":valor},
                   success: function(data) {
                    console.log(data);
                    $("#tab").empty();
                    var d = "<div class='chart' id='generado'></div>";
                    $("#tab").append(d);
                   var divg = $("#generado");
                   var chart = document.createElement("canvas");
                   alert("stop");
                    chart.id="graficoTemperatura";
                    chart.style="height:250px";
                    $("#generado").append(chart);
                  var fecha = [];
                  var lectura = [];
                  var lectura2 = [];

                  for(var i in data) {
                    fecha.push(data[i].fecha);
                    lectura.push(data[i].lectura);
                  }

                  var chartdata = {
                    labels: fecha,
                    datasets : [
                      {
                        label: valor,
                        borderColor: '#302f2e',
                        fill: false,
                        data: lectura
                      }]
                  };

                  var ctx = $("#graficoTemperatura");

                  var line = new Chart(ctx, {
                    type: 'line',
                    data: chartdata,      
                  });
                   ir();
                },
                error: function(data) {
                  console.log(data);
                  }
                });
         }
         function GenerarPDF(valor)
         {
            $.ajax({
       url: "core/models/ultimos.php",
       method: "POST",
       data:{"sensor":valor},
      success: function(data) {
      
      var fecha = [];
      var lectura = [];
      var a = Array();
      
      for(var i in data) {
        a.push([[data[i].numero],[data[i].fecha],[data[i].lectura]]);
      }
     var columns = ["NUMERO","FECHA","LECTURA"];
     var datas =[[1,"2017-12-12",980],[1,"2017-12-12",980],[1,"2017-12-12",980]];
                
          var doc = new jsPDF();
          console.log("Este el el arrregloa");
          console.log(a);
          console.log("Este el el arrreglo datas");
          console.log(datas);

       doc.autoTable(columns, a);
     
        var string = doc.output('datauristring');
        doc.save();
                  }
    
       })
          }
           function generarTabla(param)
        {
                       $.ajax({
                     url: "core/models/ultimos.php",
                    method: "POST",
                    data:{"sensor":param},
                   success: function(data) {
                     console.log("Aqui estas en la tabla");
                    console.log(data);
                    var t =$("#tab");
                    $('#tab').empty();
                    t.empty();
                    var tabla = "<table id='example1' class='table table-bordered table-striped'><thead>"+
                    "<tr><th>Lectura No.</th><th>Valor</th><th>Fecha</th></tr></thead><tbody></tbody></table>";
                    t.append(tabla);
                    var table = $("#example1 tbody");
                     $.each(data,function(i){
                     table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
                     });
                      $('#example1').DataTable({
                        'paging'      : true,
                        'lengthChange': true,
                        'searching'   : true,
                        'ordering'    : true,
                        'info'        : true,
                        'autoWidth'   : true
                          });
                   ir();
                },
                error: function(data) {
                  console.log(data);
                  }
                });
         }

      </script>