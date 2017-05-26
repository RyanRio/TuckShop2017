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

    if (empty($errors)) { //if all is gud
        
        $q = "SELECT user_id, first_name, last_name, phone_number FROM users	WHERE email='$e' AND pass=SHA1('$p')"; 
        $r = @mysqli_query ($dbc, $q);  

        //check result
        if (mysqli_num_rows($r) == 1) {
            //fetch record
            $row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
            return array(true, $row);
        } else { //no match
            $errors[] = 'The email address and password entered do not match those on the file.';
        }
    }

    return array(false, $errors);
} 