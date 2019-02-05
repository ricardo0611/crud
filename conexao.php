<?php

$conn = new mysqli("127.0.0.1", "root", "", "testebulla");

if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$conn->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);


return $conn;

