<?php
    $conn=new mysqli();
    $conn->connect("localhost","root","","dbproject267"); //"root" เป็นค่าพื้นฐานของxamxx "" เป็นรหัสแต่ไม่ได้ตั้ง

    if($conn->connect_error){
        die($conn->connect_error);
    }
    $conn->set_charset("utf8");
    date_default_timezone_set('Asia/Bangkok');
?>