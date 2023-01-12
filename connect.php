<?php
    $conn = mysqli_connect('127.0.0.1','root','12345678','dev_2019');
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,'utf8');
    date_default_timezone_set('Asia/Bangkok');
?>