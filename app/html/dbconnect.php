<?php

$db_host = "rds.ci.internal";
$db_name = "webapp";
$db_user = "admin";
$db_pass = "Password01";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
