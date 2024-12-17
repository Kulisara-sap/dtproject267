<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css"> <!--เป็นการเรียกใช้งานstyle.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
<!--====form section start====-->
<h2 class="p1">
    <i class="fa-regular fa-snowflake"></i> เพิ่มข้อมูลห้องพัก</h2>
<div class="content">
<p id="msg"></p>
    <form id="userForm" method="POST">

        <div class="mb-3">
            <label  class="form-label">ROOMNAME</label>
            <input type="text" class="form-control" 
            name="troomname"
            placeholder="ระบุชื่อห้อง....">
        </div>
        
        <div class="mb-3">
            <label class="form-label">DETAILS</label>
            <textarea class="form-control" 
            name="tdetail" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">ROOMTYPE</label>
            <select class="form-control" 
            name="troomtype">
<?php 
    include"database.php";
    $sql="SELECT * FROM tbroomtype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
                <option value="<?=$row->roomtypeid?>"> <!--บรรทัดนี้เก็บข้อมูลไอดีเข้าตารางฐานข้อมูล-->
                    <?=$row->roomtypename?></option> <!--บรรทัดนี้แสดงข้อมูล-->
<?php } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-outline-success">Submit</button>
    </form>
</div>
<!--====form section start====-->

<h2 class="p1">
    <i class="fa-solid fa-fire"></i> tbroom </h2>
<div class="content">
    <table class="table table-striped table-bordered table-hover"> <!--class="table table-striped" เป็นการทำให้ตารางสลับสี-->
        <thead>
            <th>ROOMID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
            <th>ROOMTYPEID</th>
        </thead>
        <tbody>
    <?php
        include"database.php";
        $sql="SELECT * FROM tbroom
            INNER JOIN tbroomtype
                ON tbroom.roomtypeid=tbroomtype.roomtypeid"; // INNER JOIN จะดึงเฉพาะข้อมูลที่ซ้ำกัน
        $query=$conn->query($sql);
        while($row=$query->fetch_object()){
    ?>
        <tr>
            <td><?=$row->roomid?></td>
            <td><?=$row->roomname?></td>
            <td><?=$row->detail?></td>
            <td><?=$row->roomtypename?></td>
        </tr>
<?php
    } // } มาจากloop while ปีกกาต้องคลุม TR
?>
        </tbody>
    </table> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>