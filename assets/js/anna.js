  console.log("YOU CALLED NE" + today);
  // $("#regions_div").css("width",document.getElementById("worldmap").offsetWidth+"px");
	var array = [['Country','Confirmed Cases','Death Cases']]
	for (var i in Data) {
		array.push([i,Data[i][today][0],Data[i][today][1]])
	}
	console.log("skjfndrsligtw iltuhtiu gehtiu4hukzehtkatyikeGiuGH,UK")
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

     
      function drawRegionsMap() {
        // console.log("RO ALLED NE" + window.innerHeight);
        var data = google.visualization.arrayToDataTable(array);
        var options = 
	      {
		      colorAxis: {colors: ['#034ea2','#afd135']},
          width: $("worldmap").css("width",window.innerWidth*0.9),
          height: window.innerHeight*0.7
	      };
        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
console.log(today)
