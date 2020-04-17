console.log("BANNNA");
// set the dimensions and margins of the graph
var margin = {top: 10, right: 30, bottom: 30, left: 50},
width = document.getElementById("corona_logo").clientWidth*1 - margin.left - margin.right,
height = document.getElementById("corona_logo").clientHeight*0.18 - margin.top - margin.bottom;

// append the svg object to the body of the page
var svg = d3.select("#my_dataviz_1")
.attr("width", width + margin.left + margin.right)
.attr("height", height + margin.top + margin.bottom)
.append("g")
.attr("transform",
    "translate(" + margin.left + "," + margin.top + ")")
.attr("id","anna")   ;


var margin2 = {top: 10, right: 30, bottom: 30, left: 50},
width2 = document.getElementById("corona_logo").clientWidth*1.3 - margin2.left - margin2.right,
height2 = document.getElementById("corona_logo").clientHeight*0.18 - margin2.top - margin2.bottom;

var svg2 = d3.select("#my_dataviz_2")
.attr("width", width2 + margin.left + margin.right)
.attr("height", height2 + margin.top + margin.bottom)
.append("g")
.attr("transform",
    "translate(" + margin.left + "," + margin.top + ")")
.attr("id","banna")   ;


//Read the data

var annaship = "";
d3.csv("https://raw.githubusercontent.com/datasets/covid-19/master/data/worldwide-aggregated.csv"
,

// When reading the csv, I must format variables:
function(d){
console.log(d);
return { date : d3.timeParse("%Y-%m-%d")(d.Date), valuec : d.Confirmed, valued : d.Deaths }
},

// Now I can use this dataset:
function(data) {
console.log(data[0].value +"RAM")
// Add X axis --> it is a date format
var x = d3.scaleTime()
.domain(d3.extent(data, function(d) { return d.date; }))
.range([ 0, width ]);
svg.append("g")
.attr("transform", "translate(0," + height + ")")
.call(d3.axisBottom(x));

annaship = d3.max(data, function(d) { return +d.valuec; });
// Add Y axis
var y = d3.scaleLinear()
.domain([0, d3.max(data, function(d) { return +d.valuec; })])
.range([ height, 0 ]);
svg.append("g")
.call(d3.axisLeft(y));

// Add the area
svg.append("path")
.datum(data)
.attr("fill", "yellow")
.attr("stroke", "#fbad4c")
.attr("stroke-width", 4)
.attr("opacity","0.7")
.attr("d", d3.area()
    .x(function(d) { return x(d.date) })
    .y0(y(0))
    .y1(function(d) { return y(d.valuec) })
)

// Add X axis --> it is a date format
var x = d3.scaleTime()
.domain(d3.extent(data, function(d) { return d.date; }))
.range([ 0, width2 ]);
svg2.append("g")
.attr("transform", "translate(0," + height + ")")
.call(d3.axisBottom(x));


annaship = d3.max(data, function(d) { return +d.valued; });
// Add Y axis
var y = d3.scaleLinear()
.domain([0, d3.max(data, function(d) { return +d.valued; })])
.range([ height2, 0 ]);
svg2.append("g")
.call(d3.axisLeft(y));

// Add the area
svg2.append("path")
.datum(data)
.attr("fill", "red")
.attr("stroke", "#fbad4c")
.attr("stroke-width", 4)
.attr("opacity","0.7")
.attr("d", d3.area()
    .x(function(d) { return x(d.date) })
    .y0(y(0))
    .y1(function(d) { return y(d.valued) })
)


})
