<?php

/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 04-12-17
 * Time: 16:21
 */

//Database Connection
$link = mysqli_connect("localhost:3306", "pipo", "declown", "vulnerable_db");
mysqli_set_charset($link, 'utf8mb4');
//Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}