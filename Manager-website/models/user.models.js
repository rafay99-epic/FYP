const mongoose = require('mongoose');

var UserSchemes = new mongoose.Schema({
    fullName: {
        type: String,
        required: "This Feild is required" 
    },
    email: { 
        type: String
    },
    password: {
        type: String, 
        required: "Password is Required"
        
    },    
    Date_of_birth: {
        type: Date,
        required: "Date of Birth is Required"
    }
});
// Custom validation for email
UserSchemes.path('email').validate((val) => {
    emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailRegex.test(val);
}, 'Invalid e-mail.');

mongoose.model('User',UserSchemes);