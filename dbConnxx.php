<?php

$db = mysqli_connect("localhost","helpdesk","testing101","hdupdates");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
