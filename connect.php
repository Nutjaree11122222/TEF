<?php
    $conn = mysqli_connect('202.29.229.253','it65309010007','it65309010007','it65309010007');
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,'utf8');
    date_default_timezone_set('Asia/Bangkok');
?>