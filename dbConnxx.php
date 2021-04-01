<?php

$db = mysqli_connect("localhost","mysql_username","mysql_psswd","mysql_database_name");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
