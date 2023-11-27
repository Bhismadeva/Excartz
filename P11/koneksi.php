<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "2101020060_deva";

$con = mysqli_connect($host, $user, $pass);
mysqli_select_db($con, $db);