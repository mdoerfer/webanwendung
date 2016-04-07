console.log('Hello');

var startdate=new Date($(".startdate span").text());
var enddate=new Date($(".enddate span").text());
var seitenanzahl = $(".enddate span").text();


$(".gliederung span").text((enddate.getDate()-startdate.getDate())*0.15 + ' Tage');
$(".recherche span").text((enddate.getDate()-startdate.getDate())*0.3 + ' Tage');
$(".schreibphase span").text((enddate.getDate()-startdate.getDate())*0.75 + ' Tage');
$(".korrektur span").text((enddate.getDate()-startdate.getDate())*0.15 + ' Tage');
$(".drucken span").text(3 + ' Tage');
$(".abgabe span").text(enddate.getDate()-startdate.getDate() + ' Tage');


console.log(enddate.getDate()-startdate.getDate());