<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "farmacia";
$con = new mysqli($host, $user, $password, $database);
if ($con->connect_error) {
    die("NO SE CONECTO" . $con->connect_error);
}
