<?php
// This page defines two functions used by login/logout process.

/* This function determines an absolute URL and redirects the user there.
*The function takes one argument: the page to be redirected to.
*The argument defaults to index.php.*/

function redirect_user ($page = 'index.php') {
    //Start defining URL which is http:// plus the host name plus the current
    //directory:
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);

    //Remove trailing slashes
    $url = rtrim($url, '/\\');

    //add the page:
    $url .= '/' . $page;

    //redirect user
    header("Location $url");
    exit(); //quit the script
}


//Validate form data, then query database. 
//The function returns an array of the information including
//a true/false variable indicating success

function check_login($dbc, $email = '', $password = '') {

    $errors = array(); //init error array

    if (empty($email)) {  //validate email
        $errors[] = 'You forgot to enter your email address.';
    } else {
        $e = mysqli_real_escape_string($dbc, trim($email));
    }


    if (empty($password)) {  //validate password
        $errors[] = 'You forgot to enter your password.';
    } else {
        $p = mysqli_real_escape_string($dbc, trim($password));
    }

    if (empty($errors)) {
        
    }
} 