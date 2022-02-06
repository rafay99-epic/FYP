var five = require("johnny-five");
var board = new five.Board({port: "Com5"});
var controller = process.argv[2];

board.on("ready", function() {
  var proximity = new five.IR.Proximity({
    controller: controller,
    pin: "03"
  });

  proximity.on("data", function() {
    console.log("inches: ", this.inches);
    console.log("cm: ", this.cm);
  });
});