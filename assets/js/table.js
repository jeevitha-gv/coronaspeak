var table = document.getElementById("my_table");
var countries = ["US","Spain","Italy","France","Germany","China","United Kingdom","Iran","Turkey","Belgium","Switzerland","Netherlands","Canada","Brazil","Portugal","Russia","Austria","Israel","South Korea","Sweden","Ireland","India","Ecuador","Chile","Peru","Japan","Norway","Poland","Australia","Romania","Denmark","Czechia","Pakistan","Malaysia","Philippines","Indonesia","Mexico","Saudi Arabia","United Arab Emirates","Serbia","Luxembourg","Panama","Finland","Ukraine","Dominican Republic","Qatar","Colombia","Belarus","Thailand","Singapore","Argentina","Greece","South Africa","Egypt","Algeria","Iceland","Morocco","Moldova","Croatia","Hungary","New Zealand","Iraq","Estonia","Kuwait","Slovenia","Azerbaijan","Lithuania","Bahrain","Armenia","Bosnia and Herzegovina","Kazakhstan","Cameroon","Uzbekistan","North Macedonia","Slovakia","Tunisia","Bulgaria","Latvia","Lebanon","Bangladesh","Cuba","Cyprus","Afghanistan","Andorra","Oman","Costa Rica","Uruguay","Niger","Burkina Faso","Albania","Ghana","Jordan"]
var countries2 = ["United States","Spain", "Italy","France","Germany","China","United Kingdom","Iran, Islamic Republic Of","Turkey","Belgium","Switzerland","Netherlands","Canada","Brazil","Portugal","Russian Federation","Austria","Israel","Korea, Republic of","Sweden","Ireland","India","Ecuador","Chile","Peru","Japan","Norway","Poland","Australia","Romania","Denmark","Czech Republic","Pakistan","Malaysia","Philippines","Indonesia","Mexico","Saudi Arabia","United Arab Emirates","Serbia and Montenegro","Luxembourg","Panama","Finland","Ukraine","Dominican Republic","Qatar","Colombia","Belarus","Thailand","Singapore","Argentina","Greece","South Africa","Egypt","Algeria","Iceland","Morocco","Moldova, Republic of","Croatia","Hungary","New Zealand","Iraq","Estonia","Kuwait","Slovenia","Azerbaijan","Lithuania","Bahrain","Armenia","Bosnia and Herzegovina","Kazakhstan","Cameroon","Uzbekistan","Northern Mariana Islands","Slovakia","Tunisia","Bulgaria","Latvia","Lebanon","Bangladesh","Cuba","Cyprus","Afghanistan","AndorrA","Oman","Costa Rica","Uruguay","Niger","Burkina Faso","Albania","Ghana","Jordan"]
console.log(countries.length);
console.log(countries2.length);

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
console.log(Country_to_code)
for ( var j in countries) {
    var i = countries.length - j - 1;
    // console.log(countries[i]);
    console.log(Data[countries[i]][today]);
    $('#my_table').find('tbody').append('<tr><td> <span  id="' + countries[i].replace(" ","_") + '"></span>' + countries[i] + '</td><td>' + Data[countries[i]][today][0] + '</td><td>' + Data[countries[i]][today][1] + '</td></tr>')
    cnt = cnt + 1;
    const parentElement = document.getElementById(countries[i].replace(" ","_"));
    const flag = new CountryFlag(parentElement);
    flag.selectByAlpha2(Country_to_code[countries2[i]].toLowerCase());
    console.log(Country_to_code[countries2[i]].toLowerCase())
}

console.log(document.getElementById("China").innerHTML);