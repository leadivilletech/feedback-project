<?php

define('DB_NAME', "feedback_app");
define('DB_USER', "leadivilletech@gmail.com");
define('DB_PASS', "123456");
define('DB_HOST', "localhost");

$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// print_r($connect);
if ($connect->connect_error) {
    die("connection error" . $connect->connect_error);
    echo '<span class="material-symbols-outlined">
    signal_disconnected
    </span>';
} else {
    echo '<span class="icon">
        <i class="fa fa-signal" style="color: green; margin-left:20px";></i>
    </span>';
}
