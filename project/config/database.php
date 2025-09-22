<?php
$db_server = '127.0.0.1:3307';
$db_user = 'garth';
$db_pass = '12345';
$db_name = 'php_series';

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "You are connected!";
}
