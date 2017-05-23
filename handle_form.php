<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type"
        content="text/html; charset=utf-8" />
    <title>Form Feedback</title>
</head>
<body>
<style>
    label {
        font-weight: bold;
        color: #300ACC;
    }
    .error {
        font-weight: bold;
        color: #C00;
    }
</style>
<?php

if(!empty($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
} else {
    $name = NULL;
    echo '<p class = "error">You forgot to enter your name!</p>';
}

if(!empty($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
} else {
    $email = NULL;
    echo '<p class = "error">You forgot to enter your email address!</p>';
}

if(!empty($_REQUEST['comments'])) {
    $comments = $_REQUEST['comments'];
} else {
    $comments = NULL;
    echo '<p class = "error">You forgot to enter your comments!</p>';
}

if(isset($_REQUEST['gender'])) {

    $gender = $_REQUEST['gender'];

    if ($gender == 'M') {
        echo '<p><b>Good day, Sir!</b></p>';
    } elseif ($gender=='F') {
        echo '<p><b>Good day, Madam!</b></p>';
    } else {
        $gender=NULL;
        echo '<p class="error">Gender should be either "M" or "F"!</p>';
    }
} else {
    $gender = NULL;
    echo '<p class="error">You forgot to select your gender!</p>';
}

if($name&&$email&&$comments&&$gender) {
    echo "<p>Thank you, <b>$name</b>,
    for the following comments: <br />
    <tt>$comments</tt></p>
    <p>We will reply to you at
        <i>$email</i>.</p>\n";
} else {
    echo '<p class="error">Please go back and fill out the form again.</p>';
}
?>
</body>
</html>