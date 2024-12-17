<link rel="stylesheet" href="../style(lab).css"> <!--เป็นการเรียกใช้งานstyle.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1">
    <i class="fa-solid fa-pen-to-square"></i> เพิ่มข้อมูลผู้ใช้</h2>
<div class="content">
    <form action="../action.php" method="post">

        <div class="mb-3">
            <label  class="form-label">FIRSTNAME</label>
            <input type="text" class="form-control" 
            name="tfirstname"
            placeholder="ระบุชื่อ...." required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">LASTNAME</label>
            <input type="text" class="form-control" 
            name="tlastname"
            placeholder="ระบุนามสกุล...." required>
        </div>

        <div class="mb-3">
            <label class="form-label">USERNAME</label>
            <input type="text" class="form-control" 
            name="tusername"
            placeholder="ระบุชื่อผู้ใช้...." required>
        </div>

        <div class="mb-3">
            <label class="form-label">PASSWORD</label>
            <input type="password" class="form-control" 
            name="tpassword"
            placeholder="ระบุรหัสผ่าน...." required>
        </div>


        <div><input type="submit" name="bSubmitUser" class="btn btn-primary" value="บันทึกข้อมูล"></div>
</div>