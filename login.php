<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require('includes/login_functions.inc.php');

    require('mysqli_connect.php');

    list($check, $data) = check_login($dbc, $_POST['email'], $_POST['password']);

    if ($check) {
        setcookie ('first-name', $data['first_name']);
        setcookie ('user_id', $data['user_id']);
        redirect_user('loggedin.php');
    } else {
        $errors = $data;
    }

    mysqli_close($dbc);
}

include ('/index.php');
?>