

      Graficos</section>
    <!-- Main content -->
    <section class="content">

        <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sensor Temperatura</h3>

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
      </div>

        <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sensor Húmedad</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="graficoHumedad" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
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

      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Sensor Particulas PM2.5</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="graficoPM2" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Sensor Particulas PM10</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="graficoPM10" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Sensor de Ozono</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="graficoOzono" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
  <section class="content">

      <script type="text/javascript">

        $(document).ready(function(){


      $.ajax({
    url: "core/models/lecturas/ultimos.php",
    method: "POST",
    data:{"sensor":"sensorPm"},
    success: function(data) {
      console.log(data);
      var timeformat="YYYY-MM-DD HH:MM";
      var fecha = [];
      var lectura = [];
      var lectura2 = [];
      var tiempos = new Array();

      for(var i in data) {
        fecha.push(data[i].fecha);
        lectura.push(data[i].lectura);
      }

      var chartdata = {
        labels: fecha,
        datasets : [
          {
            label: 'Sensor SDS011',
            borderColor: '#ff1900',
            fill: false,
            data: lectura
          }]
      };

      var ctx = $("#graficoPM2");

      var line = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options:{
            scales:{
              xAxes:[{
                type:'time',
                time:{/*
                  format:'YYYY-MM-DD HH:mm',
                  tooltipFormat:'ll HH:mm'*/
                  unit:'day',
                  distribution:'linear'
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
      }

      );
    },
    error: function(data) {
      console.log(data);
    }
  });

      $.ajax({
    url: "core/models/lecturas/ultimos.php",
    method: "POST",
    data:{"sensor":"sensorPm1"},
    success: function(data) {
      console.log(data);
      var timeformat="YYYY-MM-DD HH:MM";
      var fecha = [];
      var lectura = [];
      var lectura2 = [];
      var tiempos = new Array();

      for(var i in data) {
        fecha.push(data[i].fecha);
        lectura.push(data[i].lectura);
      }

      var chartdata = {
        labels: fecha,
        datasets : [
          {
            label: 'Sensor SDS011',
            borderColor: '#FF33DD',
            fill: false,
            data: lectura
          }]
      };

      var ctx = $("#graficoPM10");

      var line = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options:{
            scales:{
              xAxes:[{
                type:'time',
                time:{/*
                  format:'YYYY-MM-DD HH:mm',
                  tooltipFormat:'ll HH:mm'*/
                  unit:'day',
                  distribution:'linear'
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
      }

      );
    },
    error: function(data) {
      console.log(data);
    }
  });

         $.ajax({
    url: "core/models/lecturas/ultimos.php",
    method: "POST",
    data:{"sensor":"sensorDx"},
    success: function(data) {
      console.log(data);
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
            borderColor: '#00cc00',
            fill: false,
            data: lectura
          }]
      };

      var ctx = $("#graficoOzono");

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

          var dt3 = {"sensor":"sensorOz","limit":"5"};
          $.ajax({
    url: "core/models/lecturas/ultimos.php",
    method: "POST",
    data:dt3,
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
                  tooltipFormat:'ll HH:mm'
                }
              }],
              yAxes:[
                {
                    ticks: {
                   suggestedMin: 0,
                   suggestedMax:10
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

  var dt4 = {"sensor":"sensorT","limit":"5"};
          $.ajax({
    url: "core/models/lecturas/ultimos.php",
    method: "POST",
    data:dt4,
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
            label: 'Sensor DTH11',
            borderColor: '#33D3FF',
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

   var dt4 = {"sensor":"sensorH","limit":"5"};
          $.ajax({
    url: "core/models/lecturas/ultimos.php",
    method: "POST",
    data:dt4,
    success: function(data) {
      console.log(data);
      var table = $("#tablaHumedad tbody");
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
            label: 'Sensor DTH11',
            borderColor: '#990000',
            fill: false,
            data: lectura
          }]
      };

      var ctx = $("#graficoHumedad");

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
			var myVar = setInterval(function(){ actualizar() }, 1000);

		function actualizar() {
		/*$.ajax({
		url: "http://localhost/mvajax/core/models/datos2.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var fecha = [];
			var lectura = [];
      var lectura2 = [];

			for(var i in data) {
				fecha.push(data[i].fecha);
				lectura.push(data[i].y);
        lectura2.push(data[i].y2);
			}

			var chartdata = {
				labels: fecha,
				datasets : [
					{
						label: 'Sensor DTH11',
						borderColor: '#3e95cd',
            fill: false,
						data: lectura
					},
          {
						label: 'Sensor MQ7',
						borderColor: '#c45850',
            fill: false,
						data: lectura2
          }
				]
			};

			var ctx = $("#graficoTemperatura");

			var line = new Chart(ctx, {
				type: 'line',
				data: chartdata,
				options: {
					animation: false
				},

			});
		},
		error: function(data) {
			console.log(data);
		}
	});*/
		}


});

      </script>
