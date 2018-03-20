$(document).ready(function(){
	$.ajax({
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

			var ctx = $("#grafico1");

			var line = new Chart(ctx, {
				type: 'line',
				data: chartdata,
       
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
