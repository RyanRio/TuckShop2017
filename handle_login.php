<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type"
        content="text/html; charset=utf-8" />
    <title>LoginResponse</title>
</head>
<body>
<style>
    .error {
        font-weight: bold;
        color: #C00;
    }
</style>
<?php
    if(!empty($_REQUEST['userName'])) {
        $userName = $_REQUEST['userName'];
    } else {
        $userName = NULL;
        echo '<p class = "error">You forgot to enter your name!</p>';
    }

    //Parses full name into first and last name
    $spacePosition= strpos("$userName", " ");
    $firstName=substr($userName, 0, $spacePosition);
    $lastName=substr($userName, $spacePosition, strlen($userName));

    //Logic to decide whether to remember user or not
    if(isset($_REQUEST['rememberUser'])) {

        $rememberUser = $_REQUEST['rememberUser'];

        if ($rememberUser == 'Yes') {
            $remember = true;
        } elseif ($rememberUser=='No') {
            $remember = false;
        } else {
            //If someone somehow puts in a value other than yes or no, default remember to false
            $remember = false;
            echo '<p class="error">Gender should be either "M" or "F"!</p>';
        }
    } else {
        //If no value is selected default to false
        $remember = false;
    }

    if($remember==true && $userName!=NULL) {
        header("Location: http://tuckShop.local/form.html");
        exit();
    }
    else if($remember==false && $userName!=NULL) {
        $userName=NULL;
        header("Location: http://tuckShop.local/form.html");
        exit();
    }
    else {
        header("Location: http://tuckShop.local/login.html");
        exit();
    }
?>
</body>