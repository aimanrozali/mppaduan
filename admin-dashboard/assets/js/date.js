var today = new Date();
var date = today.getDate();
var month = today.getMonth() + 1;
const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
let day = weekday[today.getUTCDay()];

function appendZero(value) {
    return "0" + value;
}

function theTime() {
    var d = new Date();
    document.getElementById("time").innerHTML = d.toLocaleTimeString("en-US");
	

}

if (date < 10) {
    date = appendZero(date);
}

if (month < 10) {
    month = appendZero(month);
}

today = date + "/" + month + "/" + today.getFullYear();

document.getElementById("date1").innerHTML = today;
document.getElementById("date2").innerHTML = today;

document.getElementById("day").innerHTML = day;


var myVar = setInterval(function () {
    theTime();
}, 1000);