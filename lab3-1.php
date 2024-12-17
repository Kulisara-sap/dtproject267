<!--การดึงข้อมูลจากตารางมากกว่า 1 ตาราง (join table)-->
<link rel="stylesheet" href="style(lab).css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1">
    <i class="fa-solid fa-book"></i> ตาราง tbbook</h2>
<div class="content">
    <table class="table table-striped table-bordered"> <!--class="table table-striped" เป็นการทำให้ตารางสลับสี-->
        <thead>
            <th>BOOK ID</th>
            <th>BOOKNAME</th>
            <th>AUTHOR</th>
            <th>PRICE</th>
            <th>STOCK</th>
            <th>BOOKTYPE ID</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbbook";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->bookid?></td>
            <td><?=$row->bookname?></td>
            <td><?=$row->author?></td>
            <td><?=$row->price?></td>
            <td><?=$row->stock?></td>
            <td><?=$row->booktypeid?></td>
        </tr>
<?php
    } // } มาจากloop while ปีกกาต้องคลุม TR
?>
        </tbody>
    </table> 
    <div>
        <a href="lab3-2.php">
            <button class="btn btn-outline-primary"><i class="fa-regular fa-floppy-disk"></i> ADD BOOK</button>
        </a>
    </div>
</div>

<h2 class="p1">
    <i class="fa-solid fa-book"></i> ตาราง tbbooktype</h2>
<div class="content">
    <table class="table table-striped table-bordered"> <!--class="table table-striped" เป็นการทำให้ตารางสลับสี-->
        <thead>
            <th>BOOKTYPEID</th>
            <th>BOOKTYPENAME</th>
        </thead>
        <tbody>
    <?php
        include"dbcon.php";
        $sql="SELECT * FROM tbbooktype";
        $query=$conn->query($sql);
        while($row=$query->fetch_object()){
    ?>
        <tr>
            <td><?=$row->booktypeid?></td>
            <td><?=$row->booktypename?></td>
        </tr>
    <?php
        } // } มาจากloop while ปีกกาต้องคลุม TR
    ?>
        </tbody>
    </table> 
    <div>
        <a href="lab3-3.php">
            <button class="btn btn-outline-primary"><i class="fa-regular fa-floppy-disk"></i> ADD TYPEBOOK</button>
        </a>
    </div>
</div>

<h2 class="p1">
    <i class="fa-solid fa-book-open-reader"></i> รายชื่อหนังสือ </h2>
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
        $sql="SELECT * FROM tbbook
            INNER JOIN tbbooktype
                ON tbbook.booktypeid=tbbooktype.booktypeid"; // INNER JOIN จะดึงเฉพาะข้อมูลที่ซ้ำกัน
        $query=$conn->query($sql);
        while($row=$query->fetch_object()){
    ?>
        <tr>
            <td><?=$row->bookname?></td>
            <td><?=$row->booktypename?></td>
            <td><?=$row->price?></td>
        </tr>
    <?php
        } // } มาจากloop while ปีกกาต้องคลุม TR
    ?>
        </tbody>
    </table> 
</div>