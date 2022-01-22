//  ###############################################################################
//  #                                                                             #
//  #                      #### Mohammad Abdul Rafay   #####                      # 
//  #                      #### 99marafay@gmail.com    #####                      #
//  #                      #### Github: rafay99-epic   #####                      #
//  #                      #### The Server Page        #####                      #
//  #                                                                             #
//  ###############################################################################

//This is the connection and request connection from mongo db
require('./models/db')

//creating an express connector for the the database connections 
const express = require('express');
//thdrd srr thr hsndel bar pathand it the middle man.
const path = require('path');
// const express = require('express');
const { engine } = require('express-handlebars');
// const exphbs = require('express-handlebars');
const bodyparser = require('body-parser');

//this will request for the user controller 
const userController = require('./controllers/userController');

//The app variable will store the connections for express connections
var app = express();

app.use(bodyparser.urlencoded({
    extended: true
}));

app.use(bodyparser.json());
app.set('views', path.join(__dirname, '/views/'));
app.engine('hbs', engine({ extname: 'hbs', defaultLayout: 'mainLayout', layoutsDir: __dirname + '/views/layouts/' }));
app.set('view engine', 'hbs');

//this is the listen function and using this function the first paratmeter is the pot number and the second parameter is the callback functions 
app.listen(3000 , () => {
    console.log("Express Server started at port 3000");
});

//this will use or call the user controller
app.use('/user',userController);

