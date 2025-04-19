<?php

if (!defined('DB_SERVER')) {
    define('DB_SERVER', '127.0.0.1:3306');
}

if (!defined('DB_USER')) {
    define('DB_USER', 'root');
}

if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}

if (!defined('DB_DATABASE')) {
    define('DB_DATABASE', 'feedback_system');
}


$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);


if (!$conn) {
   
    die("Connection failed: " . mysqli_connect_error());
}
?>
