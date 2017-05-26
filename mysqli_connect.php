<?php //This files connects to database and has database access info

DEFINE ('DB_USER', 'username'); //put in a shared username
DEFINE ('DB_PASSWORD', 'password'); //put in a shared password
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'tucktogo'); //sitename is name of dataabase by convention

$dbc = @mysqli_connect (DB_HOST,DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect ot MySQL:' . mysqli_connect_error);