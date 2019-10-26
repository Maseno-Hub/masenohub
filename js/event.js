$(function () {
  $("div.image").hover(function () {
    $(this).find("span").show(500);
  }, function () {
    $(this).find("span").hide(1000);
  });
});

function makeTimer() {

  //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
  var endTime = new Date("20 October 2019 14:00:00 GMT+01:00");
  endTime = (Date.parse(endTime) / 1000);

  var now = new Date();
  now = (Date.parse(now) / 1000);

  var timeLeft = endTime - now;

  var days = Math.floor(timeLeft / 86400);
  var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
  var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
  var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

  if (hours < "10") { hours = "0" + hours; }
  if (minutes < "10") { minutes = "0" + minutes; }
  if (seconds < "10") { seconds = "0" + seconds; }
  
  if (days < 0) {
    document.getElementById("progress").innerHTML = "Event has passed";
    document.getElementById("spanProgress").style.backgroundColor = "#ff8c1a";
  } else {
    $("#days").html(days + "<span>Days</span>");
    $("#hours").html(hours + "<span>Hours</span>");
    $("#minutes").html(minutes + "<span>Minutes</span>");
    $("#seconds").html(seconds + "<span>Seconds</span>");
    document.getElementById("progress").innerHTML = "Upcoming Event";
    document.getElementById("spanProgress").style.backgroundColor = "green";
  }



}

setInterval(function () { makeTimer(); }, 1000);

