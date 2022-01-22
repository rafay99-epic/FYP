                //Concept of Routers in javascript 
// A router is a JavaScript object that maps URLs to functions. 
//The router calls a function based on the URL. In the past, a web application was a series of interconnected pages. 
//This could either be static pages or dynamic pages that are generated on the server. ... All views are controlled by the router.

//This is the express function and this will help us to get the data 
//This is for the request statement
const express = require('express');

// The beginig of the routerr
var router = express.Router();

//This is the rounter and there are two paratmeters here
//one is the default URL and the second is the request handler functions

//using this router we will performing the curd operations but to perform curd operations we will also be using the the body handeling 
router.get('/', (req, res) => {
    res.render("user/addorEdit", {
        viewTitle: "Insert User Data"
    });
});

module.exports = router;