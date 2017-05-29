<?php 
$page_title = 'Register';
 include ('includes/header.html');

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $errors = array();

     if (empty($_POST['first_name'])) {
         $errors[] ='You forgot to enter your first name';
     } else {
         $fn = trim($_POST['first_name'])
     }

     if (empty($_POST['last_name'])) {
         $errors[] ='You forgot to enter your last name';
     } else {
         $ln = trim($_POST['last_name'])
     }

     if (empty($_POST['email'])) {
         $errors[] ='You forgot to enter your email address';
     } else {
         $e = trim($_POST['email'])
     }

     if (!empty($_POST['pass1'])) {
         if ($_POST['pass1'] != $_POST['pass2']) {
             $errors[]= 'Your password did not match the confirmed password.';
         }
     } else {
         $p = trim($_POST['pass1']);
     }

     if (empty($errors)) { //if everythings ok
     //Register user in database
     require ('/mysqli_connect.php'); //connect to db

     //make the query
     $q = "INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES ('$fn', '$ln', '$e', 'SHA1('$p'), NOW() )";
     $r = @mysqli_query ($dbc, $q);
     }


 }