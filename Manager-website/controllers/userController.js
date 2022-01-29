//Concept of Routers in javascript
// A router is a JavaScript object that maps URLs to functions.
//The router calls a function based on the URL. In the past, a web application was a series of interconnected pages.
//This could either be static pages or dynamic pages that are generated on the server. ... All views are controlled by the router.

//This is the express function and this will help us to get the data
//This is for the request statement
const express = require("express");

// The beginig of the routerr
var router = express.Router();
const mongoose = require("mongoose");
const User = mongoose.model("User");

//This is the rounter and there are two paratmeters here
//one is the default URL and the second is the request handler functions

//using this router we will performing the curd operations but to perform curd operations we will also be using the the body handeling
router.get("/", (req, res) => {
  res.render("user/addOrEdit", {
    viewTitle: "Insert User Data",
  });
});

router.post("/", (req, res) => {
  if (req.body._id == "") insertRecord(req, res);
  else updateRecord(req, res);
});

function insertRecord(req, res) {
  var user = new User();
  user.fullName = req.body.fullName;
  user.email = req.body.email;
  user.password = req.body.password;
  user.Date_of_birth = req.body.Date_of_birth;
  user.save((err, doc) => {
    if (!err) res.redirect("user/list");
    else {
      if (err.name == "ValidationError") {
        handleValidationError(err, req.body);
        res.render("user/addOrEdit", {
          viewTitle: "Insert User Data",
          user: req.body,
        });
      } else console.log("Error during record insertion : " + err);
    }
  });
}

function updateRecord(req, res) {
  User.findOneAndUpdate(
    { _id: req.body._id },
    req.body,
    { new: true },
    (err, doc) => {
      if (!err) {
        res.redirect("user/list");
      } else {
        if (err.name == "ValidationError") {
          handleValidationError(err, req.body);
          res.render("user/addOrEdit", {
            viewTitle: "Enter Details To Update.",
            employee: req.body,
          });
        } else console.log("Error during updating the record: " + err);
      }
    }
  );
}

function handleValidationError(err, body) {
  for (field in err.errors) {
    switch (err.errors[field].path) {
      case "fullName":
        body["fullNameError"] = err.errors[field].message;
        break;
      case "email":
        body["emailError"] = err.errors[field].message;
        break;
      case "password":
        body["passwordError"] = err.errors[field].message;
        break;
      case "Date_of_birth":
        body["Date_of_birthError"] = err.errors[field].message;
        break;
      default:
        break;
    }
  }
}

router.get("/list", (req, res) => {
  User.find((err, docs) => {
    if (!err) {
      res.render("user/list", {
        list: docs,
      });
    } else {
      console.log("Error in retrieving User Data :" + err);
    }
  });
});

router.get("/:id", (req, res) => {
  User.findById(req.params.id, (err, doc) => {
    if (!err) {
      res.render("user/addOrEdit", {
        viewTitle: "Enter Details To Update.",
        user: doc,
      });
    }
  });
});

router.get("/delete/:id", (req, res) => {
  User.findByIdAndRemove(req.params.id, (err, doc) => {
    if (!err) {
      res.redirect("/user/list");
    } else {
      console.log("Failed to Delete User Details: " + err);
    }
  });
});

module.exports = router;
