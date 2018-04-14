<?php
  include(HTML_DIR.'overall/header.php');
  include(HTML_DIR.'overall/topnav.php');
  include(HTML_DIR.'public/login.html');
?>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <?php
    if(isset($_SESSION['app_id']))
    {
      echo '</section>
    <!-- Main content -->
    <section class="content container-fluid">
     <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Monoxido de Carbono</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="graficoMonoxido" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tabla Ozono</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table id="tablaOzono" class="table table-bordered table-striped">
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
        </div>


      </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Gráfico Temperatura</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="graficoTemperatura" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>



         <div class="row">

          <!-- /.box -->

          <!-- BAR CHART -->
         <div class="col-md-6">
          <!-- LINE CHART -->
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
              <table id="tablaTemperatura" class="table table-bordered table-striped">
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

        </div>
      <!-- /.row -->

    </section>    ';

    echo '</section>';
    }
    else
    {
      echo '<h1>
        POR FAVOR INICIE SESSIÓN
        <small>Usuario No Registrado</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-graph"></i>Gráficos</a></li>
        <li class="active">Sensor MD</li>
      </ol>
       </section>
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#registro">
                Iniciar Sesión
              </button>

    </section>';
    }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script src="views/app/js/generales.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

          $.ajax({
    url: "index.php?view=lecturas&mode=ultimosdatos&sensor=sensorDx&limit=10",
    success: function(data) {
      console.log(data);
       var table = $("#tablaOzono tbody");
              $.each(data,function(i){
              table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
          });

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
            label: 'Sensor MQ131',
            borderColor: '#003399',
            fill: false,
            data: lectura
          }]
      };

      var ctx = $("#graficoMonoxido");

      var line = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options:{
            scales:{
              xAxes:[{
                type:'time',
                time:{
                  format:'YYYY-MM-DD HH:mm',
                  tooltipFormat:'ll HH:mm',
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
    },
    error: function(data) {
      console.log(data);
    }
  });


          $.ajax({
    url: "index.php?view=lecturas&mode=ultimosdatos&sensor=sensorOz&limit=10",
    method: "GET",
    success: function(data) {
      console.log(data);
       var table = $("#tablaTemperatura tbody");
              $.each(data,function(i){
              table.append("<tr><td>"+data[i].numero+"</td><td>"+data[i].lectura+"</td> <td>"+data[i].fecha+"</td></tr>");
          });

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
            label: 'Sensor MQ131',
            borderColor: '#990000',
            fill: false,
            data: lectura
          }]
      };

      var ctx = $("#graficoTemperatura");

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
    },
    error: function(data) {
      console.log(data);
    }
  });

    })

</script>
<?php
  include(HTML_DIR.'overall/footer.php');
?>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
