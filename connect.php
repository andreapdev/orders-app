<?php
    $user = 'root';
    $password = '';
    //insecure! Fix: environment variables
    $db = 'freshly-db';
    $host = 'localhost:3306';
    $port = 8889;

    $link = mysqli_init();
    $success = mysqli_real_connect(
        $link,
        $host,
        $user,
        $password,
        $db,
        $port
    );
?>