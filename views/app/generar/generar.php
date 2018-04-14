

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
              <div class="form-group">
                <label>Sensor</label>
                 </br>
                 <input type="checkbox" class="minimal" value="sensorT" id="c1"> Sensor Temperatura DHT11 </br>
                 <input type="checkbox" class="minimal" value="sensorOz" id="c2"> Sensor Ozono </br>
                 <input type="checkbox" class="minimal" value="sensorPm" id="c3"> Sensor PM 2.5 </br>
                 <input type="checkbox" class="minimal" value="sensorDx" id="c4"> Sensor Dióxido de Carbono </br>
                  <input type="checkbox" class="minimal" value="sensorPm1" id="c6"> Sensor Pm 10 </br>
                   <input type="checkbox" class="minimal" value="sensorH" id="c7"> Sensor Humedad </br>

             </div>


             <div class="form-group">
               <label >
                   <input type="radio" name="radiofecha" id="r1" class="minimal" checked>Día
               </label>
               <input type="text" class="form-control" id="datepickerD">
               <label >
                   <input type="radio" name="radiofecha" id="r2" class="minimal">Fechas
               </label>
               <input type="text" class="form-control" id="datepickerS">
             </div>




            </div>
            <!--la columna de la derecha-->
            <div class="col-md-6">
              <div class="form-group">
                <label>Seleccionar Hora:</label>
              <div class="form-group">
                <div class="input-group">
                  <label >
                      <input type="radio" name="radiohora" id="rh1" class="minimal" checked>Todas
                  </label>
                </div>

                <label >
                    <input type="radio" name="radiohora" id="rh2" class="minimal">Hora
                </label>
                <input type="text" class="form-control" id="tp">
                <label >
                    <input type="radio" name="radiohora" id="rh3" class="minimal">Rango
                </label>
                <div class="form-group">
                Entre las:<input type="text" class="form-control" id="tp2"> y las<input type="text" class="form-control" id="tp3">
                </div>

              </div>


            </div>
            <div class="form-group">
              <label>Seleccionar Intervalos:</label>
            <div class="form-group">
              <div class="input-group">
                <label >
                    <input type="radio" name="radiointer" id="ri1" class="minimal" checked>Cada 5 Minutos
                </label>
              </div>

              <label >
                  <input type="radio" name="radiointer" id="ri2" class="minimal"> Cada Hora
              </label>

            </div>


          </div>
            </div>

          </div>
            <button class="btn btn-default" onclick="Generar()">Generar</button>
                <button class="btn btn-default" onclick="GenerarP()">Generar2</button>


            </div>
            <!-- /.box-body -->
          </div>

        </div>

      </div>
    </section>




         <!---------------------------------RowPrincipal------------------>



   <!-- SEGUNDO GRAFICO SENSOR -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" id="boxtitulo">Titulo</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" id="tab">

            </div>
          </div>
          <!-- /.box -->          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
</section>


      <script src="views/app/js/datatables.net/jquery.dataTables.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="views/app/js/datatables.net-bs/dataTables.bootstrap.min.js"></script>
  <script src="views/app/js/jspdf.js"></script>
  <script src="views/app/js/standard_fonts_metrics.js"></script>
  <script src="views/app/js/split_text_to_size.js"></script>
  <script src="views/app/js/jspdf.debug.js"></script>
  <script src="views/app/js/jspdf.plugin.autotable.min.js"></script>

  <script src="views/app/js/datatables.net/jquery.dataTables.min.js"></script>
    <script src="views/app/js/datatables.net-bs/dataTables.bootstrap.min.js"></script>

    <script src="views/app/js/moment/min/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.27/daterangepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="views/app/css/iCheck/icheck.min.js"></script>
<script src="views/app/js/wickedpicker/wickedpicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.min.js"></script>
<!-- bootstrap color picker -->


<!-- SlimScroll -->

      <script type="text/javascript">
      var consulta="";

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


    $('#datepickerD').datepicker({
        format: 'yyyy-mm-dd',
    })
    $('#datepickerD').datepicker("setDate", new Date())
    $('#datepickerS').daterangepicker({
      locale: {
     format: 'YYYY-MM-DD'
       }
    })
    $('#tp,#tp2,#tp3').wickedpicker({
      twentyFour: true
    })


  })

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


        function ObtenerParametros(sensores)
        {
          var array = new Array(4);
          var cadena="";
          var count =0;
            for(var i in sensores)
            {
                if(count == 0)
                  cadena+=sensores[i];
                  else
                  cadena+=","+sensores[i];
                  count++;
            }
            array[0]= cadena;
            if($('#r1').is(':checked'))
            {

              var date = $("#datepickerD").val();
              array[1]="dia,"+date+",NA";
              console.log(array[2]);
            }
            if($('#r2').is(':checked'))
            {

                var date = $("#datepickerS").val();
                var start = date.substr(0,10);
                var end = date.substr(13,11);
                array[1] = "dias,"+start+","+end;
                console.log(array[2]);
            }
            if($('#rh1').is(':checked'))
            {
                array[2]="todas,NA,NA";
            }
            if($('#rh2').is(':checked'))
            {
              var time = $("#tp").val();
              time=time.replace(" ","");
                  time=time.replace(" ","");
              var hora = time.substr(0,2);
              time+=":00";
              array[2]="hora,"+hora+",NA";
              console.log(array[2]);
            }
            if($('#rh3').is(':checked'))
            {
              var time = $("#tp2").val();
              time=time.replace(" ","");
                  time=time.replace(" ","");
              time+=":00";
              var time2 = $("#tp3").val();
              time2=time2.replace(" ","");
              time2=time2.replace(" ","");
              time2+=":00";
              array[2]="horas,"+time+","+time2;
              console.log(array[2]);

            }
            if($('#ri1').is(':checked'))
            {
              array[3]="normales"
              console.log('Intervalos normales');
            }
            if($('#ri2').is(':checked'))
            {
              array[3]="cahora";
              console.log('Intervalos cada hora');
            }
            console.log(array);
            return array;
        }
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
           var parametros = ObtenerParametros(select);
             if($('#tipoSelect :selected').text() == "GRAFICO")
             {
                mgenerargrafico(parametros,select);
             }
              if($('#tipoSelect :selected').text() == "PDF")
             {
                mgenerarPDF(parametros,select);
             }
             if($('#tipoSelect :selected').text() == "TABLA")
             {
                mgenerarTabla(parametros,select);
             }

           /* var sensor;
           for(sensor in select)
           {
              alert(select[sensor]);
              console.log(select[sensor]);
           }*/

        }
        function mgenerarPDF(parametros,sensores)
        {
          $.ajax({
         url: "core/models/lecturas/servicegenerar.php",
        method: "POST",
        data:{
          "sensor":parametros[0],
          "dias":parametros[1],
          "horas":parametros[2],
          "intervalos":parametros[3]
        },
       success: function(data) {
        console.log(data);
        if(data=="NA")
        {
          $("#tab").empty();
            var d = "<div class='chart' id='generado'></div>";
            $("#tab").append(d);
           var divg = $("#generado");
          var newContent = document.createTextNode("Lo sentimos no hay datos");
              $("#generado").append(newContent);
              ir();
        }
        else {


    /*      var fecha = [];
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
            doc.save();*/
          console.log(data);
          var t = $("#tab");
         $("#tab").empty();
         var datost = new Array();
          var columns = ["NUMERO","FECHA"];
          var i;
         for ( i=0;i < sensores.length; i++) {
            columns.push(sensores[i]);
        }
        $.each(data,function(i){
          var temp = new Array();
          var arreglo = $.map(data[i], function(el) { return el });
          for ( j=0;j < sensores.length; j++) {
             temp.push(arreglo[j]);
         }
         datost.push(arreglo);
        });
        var doc = new jsPDF();
        console.log("Este el el arrreglo datas");
        console.log(datost);
        doc.autoTable(columns, datost);
        var string = doc.output('datauristring');
        doc.save();
         var newContent = document.createTextNode("PDF Generado");
                 $("#boxtitulo").empty();
              $("#boxtitulo").append(newContent);
        ir();

        }

/*
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
    },*/
        },
          error: function(data) {
            console.log(data);
            datos="NA";
            }
          });

        }
        function mgenerargrafico(parametros,sensores)
        {
                  var colores = new Array();
                  colores.push("#C63010");
                  colores.push("#4AC610");
                  colores.push("#DFDC04");
                  colores.push("#12C8BA");
                  colores.push("#0B1FB2");
                  colores.push("#B20BAB");
                  var datos;
                  $.ajax({
                 url: "core/models/lecturas/servicegenerar.php",
                method: "POST",
                data:{
                  "sensor":parametros[0],
                  "dias":parametros[1],
                  "horas":parametros[2],
                  "intervalos":parametros[3]
                },
               success: function(data) {
                 if(data=="NA")
                 {
                   $("#tab").empty();
                     var d = "<div class='chart' id='generado'></div>";
                     $("#tab").append(d);
                    var divg = $("#generado");
                   var newContent = document.createTextNode("Lo sentimos no hay datos");
                       $("#generado").append(newContent);
                       ir();
                 }
                 else{
                var fechas = new Array();
                var vlecturas = new Array();
                var lecturas = new Array();
                for ( j=0;j < sensores.length; j++) {
                   vlecturas[j] = new Array();
               }
                $.each(data,function(i){
                  var j;
                  var label = sensores[i];
                  fechas.push(data[i].fecha);
                  var arreglo = $.map(data[i], function(el) { return el });
                  for ( j=0;j < sensores.length; j++) {
                     vlecturas[j].push(arreglo[j+2]);
                 }
                });
                console.log("Miremos las lecturas del primer sensor");
                console.log(vlecturas[0]);
                for ( j=0;j < sensores.length; j++) {
                  lecturas.push({"label":sensores[j],
                    "borderColor":colores[j],
                    "fill": false,
                    "data": vlecturas[j]
                  });
                }

              $("#tab").empty();
                var d = "<div class='chart' id='generado'></div>";
                $("#tab").append(d);
               var divg = $("#generado");
               var chart = document.createElement("canvas");
                chart.id="graficogenerado";
                chart.style="height:250px";-
                $("#generado").append(chart);
              var fecha = [];
              console.log("Log lecturas");
              console.log(lecturas);
              var lectura2 = [];
              var chartdata = {
                labels: fechas,
                datasets : lecturas
              };

              var ctx = $("#graficogenerado");
              if($('#r1').is(':checked'))
              {
                var line = new Chart(ctx, {
                  type: 'line',
                  data: chartdata,
                  options:{
                      scales:{
                        xAxes:[{
                          type:'time',
                          unit:'day'
                        }],
                        yAxes:[
                          {
                              ticks: {
                             suggestedMin: 0
                           },
                              scaleLabel: {
                              display: true,
                              labelString: 'value',

                            }
                          }
                        ]
                      }
                  }
                });
              }
              else {
                var line = new Chart(ctx, {
                  type: 'line',
                  data: chartdata,
                  options:{
                      scales:{
                        xAxes:[{
                          type:'time',
                          time:{
                            format:'YYYY-MM-DD HH:mm',
                            tooltipFormat:'ll HH:mm'
                          }
                        }],
                        yAxes:[
                          {
                              ticks: {
                             suggestedMin: 0
                           },
                              scaleLabel: {
                              display: true,
                              labelString: 'value',

                            }
                          }
                        ]
                      }
                  }
                });

              }
                  var newContent = document.createTextNode("Grafico Generado");
                 $("#boxtitulo").empty();
              $("#boxtitulo").append(newContent);
               ir();
               }
            },
                  error: function(data) {
                    console.log(data);
                    datos="NA";
                    }
                  });
                  return datos;
        }
        function mgenerarTabla(parametros,sensores)
        {
                    $.ajax({
                   url: "core/models/lecturas/servicegenerar.php",
                  method: "POST",
                  data:{
                    "sensor":parametros[0],
                    "dias":parametros[1],
                    "horas":parametros[2],
                    "intervalos":parametros[3]
                  },
                 success: function(data) {
                  console.log(data);
                  if(data=="NA")
                  {
                    $("#tab").empty();
                      var d = "<div class='chart' id='generado'></div>";
                      $("#tab").append(d);
                     var divg = $("#generado");
                    var newContent = document.createTextNode("Lo sentimos no hay datos");
                        $("#generado").append(newContent);
                        ir();
                  }
                  else {
                    console.log(data);
                    var t = $("#tab");
                   $("#tab").empty();
                   var tabla = "<table id='example1' class='table table-bordered table-striped'><thead>"+
                   "<tr>"+
                    "<th>Lectura No.</th><th>Fecha</th>";
                    var i;
                   for ( i=0;i < sensores.length; i++) {
                      tabla+="<th>"+sensores[i]+"</th>";
                  }
                  tabla+=  "</tr></thead>"+
                    "<tbody></tbody></table>";
                   t.append(tabla);
                   var table = $("#example1 tbody");
                   $.each(data,function(i){
                     var j;
                     var fila="<tr>";
                     fila+="<td>"+data[i].Id_lectura+"</td>";
                     fila+="<td>"+data[i].fecha+"</td>";
                     var arreglo = $.map(data[i], function(el) { return el });
                     for ( j=0;j < sensores.length; j++) {
                        fila+="<td>"+arreglo[j+2]+"</td>";
                    }
                    fila+="</tr>";
                   table.append(fila);
                   });
                     $('#example1').DataTable({
                       'paging'      : true,
                       'lengthChange': true,
                       'searching'   : true,
                       'ordering'    : true,
                       'info'        : true,
                       'autoWidth'   : true,
                       "order": [[ 0, "desc" ]]
                         });
                       var newContent = document.createTextNode("Tabla Generada");
                 $("#boxtitulo").empty();
              $("#boxtitulo").append(newContent);
                  ir();

                  }

          /*
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
              },*/
                  },
                    error: function(data) {
                      console.log(data);
                      datos="NA";
                      }
                    });

        }

        function ir()
        {
              $('html, body').animate({
            scrollTop: $("#tab").offset().top
               }, 2000);
        }
        function GenerarP()
        {
          $.ajax({
         url: "index.php?view=lecturas&mode=generar",
        data:{
          "sensor":'dtx'
        },
       success: function(data) {
        console.log(data);
        },
        error: function(data) {
            console.log(data);
            }
          });
        }


      </script>
