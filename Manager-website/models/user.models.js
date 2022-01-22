const mongoose = require('mongoose');

var UserSchemes = new mongoose.Schema({
    fullName: {
        type: String
    },
    email: { 
            type: String
    },
    password: {
        type: String
    },    
    Date_of_birth: {
        type: Date
    }
});

mongoose.model('User',UserSchemes);