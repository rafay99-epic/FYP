//  ###############################################################################
//  #                                                                             #
//  #                      #### Mohammad Abdul Rafay   #####                      # 
//  #                      #### 99marafay@gmail.com    #####                      #
//  #                      #### Github: rafay99-epic   #####                      #
//  #                      #### Database connection    #####                      #
//  #                                                                             #
//  ###############################################################################



// This is a constant that will request for the db connection
const mongoose = require('mongoose');

// This will connect the mongodb 
mongoose.connect('mongodb://localhost:27017/Smart-Parking-Assistance-DB', {useNewUrlParser: true}, (err) =>{
    if(!err) {console.log("Database is connecected");}
    else {console.log(err+ "Database is not connected Property")}
} );

require('./user.models');