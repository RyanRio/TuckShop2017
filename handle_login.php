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

    if(!empty($_REQUEST['passWord'])) {
        $passWord = $_REQUEST['passWord'];
    } else {
        $passWord = NULL;
        echo '<p class = "error">You forgot...</p>';
    }

    if($userName=="Ryan" && $passWord="test") {
        header("Location: http://tuckShop.local/form.html");
        $passWord=NULL;
        $userName=NULL;
        exit();
    }
    else {
        $passWord=NULL;
        $userName=NULL;
        header("Location: http://tuckShop.local/login.html");
        exit();
    }

?>
</body>