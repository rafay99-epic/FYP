const express = require('express');

// The beginig of the routerr
var router = express.Router();
// const mongoose = require('mongoose');
//const manager = mongoose.model('managers');


// router.get('/manager/login', (req, res) => {
//     res.render('login')
// });

router.get('/', (req, res) => {
    res.render("manager/login", {
        viewTitle: "Manager Login"
    });
});