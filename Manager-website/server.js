//  ###############################################################################
//  #                                                                             #
//  #                      #### Mohammad Abdul Rafay   #####                      #
//  #                      #### 99marafay@gmail.com    #####                      #
//  #                      #### Github: rafay99-epic   #####                      #
//  #                      #### The Server Page        #####                      #
//  #                                                                             #
//  ###############################################################################

//This is the part of the ser that will help for the curd operation for the website

//This is the connection and request connection from mongo db
require("./models/db");

//creating an express connector for the the database connections
const express = require("express");
//thdrd srr thr hsndel bar pathand it the middle man.
const handlebars = require("handlebars");
const {
  allowInsecurePrototypeAccess,
} = require("@handlebars/allow-prototype-access");
const path = require("path");
const { engine } = require("express-handlebars");
const bodyparser = require("body-parser");
//this will request for the user controller
const userController = require("./controllers/userController");
// const managerController = require('./controllers/managerController');

//The app variable will store the connections for express connections
var app = express();

app.use(
  bodyparser.urlencoded({
    extended: true,
  })
);

app.get("/", (req, res) => {
  res.redirect("/user/list");
});
app.use(bodyparser.json());
app.set("views", path.join(__dirname, "/views/"));
app.engine(
  "hbs",
  engine({
    extname: "hbs",
    defaultLayout: "mainLayout",
    handlebars: allowInsecurePrototypeAccess(handlebars),
    layoutsDir: __dirname + "/views/layouts/",
  })
);
app.set("view engine", "hbs");

//this is the listen function and using this function the first paratmeter is the pot number and the second parameter is the callback functions
app.listen(4000, () => {
  console.log("Express Server started at port 4000");
});

//this will use or call the user controller and manager controller
app.use("/user", userController);
//  app.use('/manager',managerController);

var http = require("http");
var fs = require("fs");
var index = fs.readFileSync(
 // "Full File Path"
);

var SerialPort = require("serialport");
const parsers = SerialPort.parsers;

const parser = new parsers.Readline({
  delimiter: "\r\n",
});

//Change SerialPort of Arduino Board From IDE
var port = new SerialPort("COM7", {
  baudRate: 9600,
  dataBits: 8,
  parity: "none",
  stopBits: 1,
  flowControl: false,
});

port.pipe(parser);

parser.on("data", function (data) {
  console.log(data);
});

var app = http.createServer(function (req, res) {
  res.writeHead(200, { "Content-Type": "application/x-www-form-urlencoded" });
  res.end(index);
});

const io = require("socket.io")(app);

parser.on("data", function (data) {
  console.log("Received data from port: " + data);
  io.emit("data", data);
});
app.listen(3000);
