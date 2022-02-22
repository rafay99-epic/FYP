var socket = io.connect("http://localhost:3000/");

socket.on("data", function (data) {
  // console.clear();
  console.log(data);

  var res = data.split(" ");

  if (res[0] + res[1] === "Sensor1:") {
    document.getElementById("sensor1").innerHTML = res[0] + res[1];
    document.getElementById("sensor1On/Off").innerHTML = res[2];
  }
  if (res[0] + res[1] === "Sensor2:") {
    document.getElementById("sensor2").innerHTML = res[0] + res[1];
    document.getElementById("sensor2On/Off").innerHTML = res[2];
  }
  if (res[0] + res[1] === "Sensor3:") {
    document.getElementById("sensor3").innerHTML = res[0] + res[1];
    document.getElementById("sensor3On/Off").innerHTML = res[2];
  }
  if (res[0] + res[1] === "Sensor4:") {
    document.getElementById("sensor4").innerHTML = res[0] + res[1];
    document.getElementById("sensor4On/Off").innerHTML = res[2];
  }
  if (res[0] + res[1] === "Sensor5:") {
    document.getElementById("sensor5").innerHTML = res[0] + res[1];
    document.getElementById("sensor5On/Off").innerHTML = res[2];
  }
});
