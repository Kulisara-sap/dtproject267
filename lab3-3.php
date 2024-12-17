<link rel="stylesheet" href="style(lab).css"> <!--เป็นการเรียกใช้งานstyle.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1">
    <i class="fa-solid fa-pen-to-square"></i> เพิ่มข้อมูลประเภทหนังสือ</h2>
<div class="content">
    <form action="action.php" method="post">

        <div class="mb-3">
            <label  class="form-label">BOOKTYPENAME</label>
            <input type="text" class="form-control" 
            name="tbooktypename"
            placeholder="ระบุประเภทหนังสือ....">
        </div>

        <div><input type="submit" name="bSubmitTypeBook" class="btn btn-primary" value="บันทึกข้อมูล"></div>
    </form>
</div>