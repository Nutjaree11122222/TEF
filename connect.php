<?php
    $conn = mysqli_connect('127.0.0.1','it65309010007','it65309010007','it65309010007');
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,'utf8');
    date_default_timezone_set('Asia/Bangkok');
?>