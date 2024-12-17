<link rel="stylesheet" href="style(lab).css"> <!--เป็นการเรียกใช้งานstyle.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1">
    <i class="fa-solid fa-pen-to-square"></i> เพิ่มข้อมูลหนังสือ</h2>
<div class="content">
    <form action="action.php" method="post">

        <div class="mb-3">
            <label  class="form-label">BOOKNAME</label>
            <input type="text" class="form-control" 
            name="tbookname"
            placeholder="ระบุชื่อหนังสือ....">
        </div>
        
        <div class="mb-3">
            <label class="form-label">AUTHOR</label>
            <input type="text" class="form-control" 
            name="tauthor"
            placeholder="ระบุชื่อผู้แต่ง....">
        </div>

        <div class="mb-3">
            <label class="form-label">PRICE</label>
            <input type="number" class="form-control" 
            name="tprice"
            value="0">
        </div>

        <div class="mb-3">
            <label class="form-label">STOCK</label>
            <input type="number" class="form-control" 
            name="tstock"
            value="0">
        </div>

        <div class="mb-3">
            <label  class="form-label">BOOKTYPE</label>
            <select class="form-control" 
            name="tbooktype">
<?php 
    include"dbcon.php";
    $sql="SELECT * FROM tbbooktype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
                <option value="<?=$row->booktypeid?>"> <!--บรรทัดนี้เก็บข้อมูลไอดีเข้าตารางฐานข้อมูล-->
                    <?=$row->booktypename?></option> <!--บรรทัดนี้แสดงข้อมูล-->
<?php } ?>
            </select>
        </div>

        <div><input type="submit" name="bSubmitBook" class="btn btn-primary" value="บันทึกข้อมูล"></div>
    </form>
</div>