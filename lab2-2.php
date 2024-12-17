<link rel="stylesheet" href="style.css"> <!--เป็นการเรียกใช้งานstyle.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


<h2 class="p1">
    <i class="fa-solid fa-fire"></i> ความหมายของ CSS</h2>
<div class="content">
CSS ย่อมาจาก Cascading Style Sheet  มักเรียกโดยย่อว่า "สไตล์ชีต" คือภาษาที่ใช้เป็นส่วนของการจัดรูปแบบการแสดงผลเอกสาร  HTML โดยที่ CSS กำหนดกฏเกณฑ์ในการระบุรูปแบบ (หรือ "Style") ของเนื้อหาในเอกสาร อันได้แก่ สีของข้อความ สีพื้นหลัง ประเภทตัวอักษร และการจัดวางข้อความ ซึ่งการกำหนดรูปแบบ หรือ Style นี้ใช้หลักการของการแยกเนื้อหาเอกสาร HTML ออกจากคำสั่งที่ใช้ในการจัดรูปแบบการแสดงผล กำหนดให้รูปแบบของการแสดงผลเอกสาร ไม่ขึ้นอยู่กับเนื้อหาของเอกสาร เพื่อให้ง่ายต่อการจัดรูปแบบการแสดงผลลัพธ์ของเอกสาร HTML 
</div>

<h2 class="p1">
    <i class="fa-regular fa-snowflake"></i> รูปแบบการใช้งาน CSS</h2>
<div class="content">
การเขียน CSS มีหลายรูปแบบในการจัดการหลัก ๆ มีอยู่ 3 รูปแบบ ซึ่งในแต่ละรูปแบบก้จะมีจุดประส์ในการใช้งานที่แตกต่างกัน แต่ยังใช้ไวยากรณ์ของภาษา CSS ยังคงเดิม เพียงแค่รูปแบบการจัดวางที่แตกต่างกัน โดยทั้งทั้งหมด 3 รูปแบบ ดังนี้
- Inline Style Sheet
- Internal Style Sheet
- External Style Sheet
</div>

<h2 class="p1">
    <i class="fa-regular fa-snowflake"></i> การสร้างฟอร์ม (FORM)</h2>
<div class="content">
    <form action="action.php" method="post">
        <div class="mb-3">
            <label  class="form-label">FIRSTNAME</label>
            <input type="text" class="form-control" 
            name="tfirstname"
            placeholder="ระบุชื่อ....">
        </div>
        <div class="mb-3">
            <label  class="form-label">LASTNAME</label>
            <input type="text" class="form-control" 
            name="tlastname"
            placeholder="ระบุนามสกุล....">
        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="email" class="form-control"
            name="temail" 
            placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label class="form-label">ADDRESS</label>
            <textarea class="form-control" name="taddress" rows="3"></textarea>
        </div>
        <div><input type="submit" 
                    name="bSubmitStudent" 
                    class="btn btn-primary" 
                    value="บันทึกข้อมูล">
        </div>
    </form>
</div>