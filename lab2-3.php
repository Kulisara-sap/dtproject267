<!--การดึงข้อมูลจากตารางมากกว่า 1 ตาราง (join table)-->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<h2 class="p1">
    <i class="fa-solid fa-fire"></i> การดึงข้อมูลจากตารางมากกว่า 1 ตาราง (join table)</h2>
<div class="content">
xxxxxxxxxxxxxxxxxx 
</div>

<h2 class="p1">
    <i class="fa-solid fa-fire"></i> ทดสอบดึงตาราง tbroom</h2>
<div class="content">
    <table class="table table-striped table-bordered"> <!--class="table table-striped" เป็นการทำให้ตารางสลับสี-->
        <thead>
            <th>ROOMID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
            <th>ROOMTYPEID</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbroom";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomid?></td>
            <td><?=$row->roomname?></td>
            <td><?=$row->detail?></td>
            <td><?=$row->roomtypeid?></td>
        </tr>
<?php
    } // } มาจากloop while ปีกกาต้องคลุม TR
?>
        </tbody>
    </table> 
    <div>
        <a href="lab2-4.php">
            
            <button class="btn btn-outline-primary"><i class="fa-regular fa-floppy-disk"></i> ADD ROOM</button>
        </a>
    </div>
</div>


<h2 class="p1">
    <i class="fa-solid fa-fire"></i> ทดสอบดึงตาราง tbroomtype</h2>
<div class="content">
    <table class="table table-striped table-bordered"> <!--class="table table-striped" เป็นการทำให้ตารางสลับสี-->
        <thead>
            <th>ROOMTYPEID</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
    <?php
        include"dbcon.php";
        $sql="SELECT * FROM tbroomtype";
        $query=$conn->query($sql);
        while($row=$query->fetch_object()){
    ?>
        <tr>
            <td><?=$row->roomtypeid?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
        </tr>
    <?php
        } // } มาจากloop while ปีกกาต้องคลุม TR
    ?>
        </tbody>
    </table> 
</div>

<h2 class="p1">
    <i class="fa-solid fa-fire"></i> ทดสอบดึงตารางมากกว่า 1 ตาราง </h2>
<div class="content">
    <table class="table table-striped table-bordered"> <!--class="table table-striped" เป็นการทำให้ตารางสลับสี-->
        <thead>
            <th>ROOMTNAME</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
    <?php
        include"dbcon.php";
        $sql="SELECT * FROM tbroom
            INNER JOIN tbroomtype
                ON tbroom.roomtypeid=tbroomtype.roomtypeid"; // INNER JOIN จะดึงเฉพาะข้อมูลที่ซ้ำกัน
        $query=$conn->query($sql);
        while($row=$query->fetch_object()){
    ?>
        <tr>
            <td><?=$row->roomname?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
        </tr>
    <?php
        } // } มาจากloop while ปีกกาต้องคลุม TR
    ?>
        </tbody>
    </table> 
</div>