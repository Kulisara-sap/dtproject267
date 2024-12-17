<?php 
    //index.php
    include"dbcon.php"; //เชื่อมต่อฐานข้อมูล
    $sql="SELECT * FROM tbstudent";
    $query=$conn->query($sql); //นำคำสั่ง sql ไปกระทำกับข้อมูล
    while($rs=$query->fetch_object()){
        echo"".$rs->stdid."";
        echo", ".$rs->firstname."";
        echo"&nbsp;".$rs->lastname."";
        echo", ".$rs->address."<br>";
    }

    echo"<hr>"; //แสดงเส้นคั่น

    $sql2="SELECT * FROM tbstudent
            WHERE stdid = '3'";
    $query2=$conn->query($sql2); //นำคำสั่ง sql ไปกระทำกับข้อมูล
    while($rs2=$query2->fetch_object()){
        echo"".$rs2->stdid."";
        echo", ".$rs2->firstname."";
        echo"&nbsp;".$rs2->lastname."";
        echo", ".$rs2->address."<br>";
    }      

    echo"<hr>";

    $sql3="SELECT * FROM tbstudent
            WHERE firstname LIKE '%น%'";
    $query3=$conn->query($sql3); //นำคำสั่ง sql ไปกระทำกับข้อมูล
    while($rs3=$query3->fetch_object()){
        echo"".$rs3->stdid."";
        echo", ".$rs3->firstname."";
        echo"&nbsp;".$rs3->lastname."";
        echo", ".$rs3->address."<br>";
    }      

?>