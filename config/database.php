<?php

define('DB_NAME', "feedback_app");
define('DB_USER', "leadivilletech@gmail.com");
define('DB_PASS', "123456");
define('DB_HOST', "localhost");

$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// print_r($connect);

function check_connect($connect)
{
    if ($connect->connect_error) {
        throw new Exception('connection error:' . $connect->connect_error);
    } else {
        echo '<span class="icon">
        <i class="fa fa-signal" style="color: green; margin-left:20px";></i>
        </span>';
    }
}
try {
    check_connect($connect);
} catch (Exception $e) {
    echo '<span class="material-symbols-outlined">
    signal_disconnected
    </span>';
} finally {
    echo "<sup style='margin-left: 50px'>" . $connect->client_info . " connected via" . $connect->host_info . "."; "</sup>";
}
