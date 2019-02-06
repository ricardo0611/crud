<?php

$servername = "127.0.0.1";
$user = "root";
$password = "";
$db_name = "testebulla";

$conn = mysqli_connect($servername, $user, $password, $db_name);
mysqli_set_charset($conn, "utf-8");

if ($conn->connect_error) :
    printf("Connect failed: %s\n", $mysqli->connect_error);
endif;

return $conn;

