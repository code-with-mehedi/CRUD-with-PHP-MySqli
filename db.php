<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "crud-php";
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
if (!$conn) {
    echo "Error Database connection" . mysqli_connect_error();
}
