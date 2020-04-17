var table = document.getElementById("my_table");
var countries = Object.keys(Data);
var countries2 = countries;
var total = new Array(4);
for (var g = 0; g < 4; g++) {total[g] = 0;}
for (var i = 0; i < countries.length; i++) {
    for (var j = 0; j < Data[countries[i]][today].length; j++) {
        total[j] += Data[countries[i]][today][j];
     }
}
console.log(total);
for (var i = 0; i < countries.length - 1; i++) {
    for( var j = 0; j < countries.length - 1 - i; j++) 
    {
        if( Data[countries[j]][today][0] > Data[countries[j+1]][today][0]) {
            var temp = countries[j];var temp2 = countries2[j];
            countries[j] = countries[j+1];
            countries2[j] = countries2[j+1];
            countries[j+1] = temp;
            countries2[j+1] = temp2;
        }
    }
}
console.log(Data);
var cnt = 1;
for ( var j in countries) {
    var i = countries.length - j - 1;
    // console.log(countries[i]);
    console.log(Data[countries[i]][today]);
    if(Data[countries[i]][today][0] == 0) {
        break;
     }
    $('#my_table').find('tbody').append('<tr style="color:black;" id=' +  countries[i] + "_table"  + '><td> <span  id="' + countries[i].replace(" ","_") + '"></span>' + countries[i] + '</td><td>' + Data[countries[i]][today][0] + '</td><td>' + Data[countries[i]][today][2] + '</td><td>' + Data[countries[i]][today][3] + '</td><td>' + Data[countries[i]][today][1] + '</td></tr>')
    cnt = cnt + 1;
}
