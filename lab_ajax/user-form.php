<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
<!--====form section start====-->
<div class="user-detail">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label class="form-lable">Full Name</label>
          <input type="text" class="form-control" 
          placeholder="Enter Full Name" name="fullName" required>
          
          <label class="form-lable">Email Address</label>
          <input type="email" class="form-control" 
          placeholder="Enter Email Address" name="emailAddress" required>
          
          <label class="form-lable">City</label>
          <input type="city" class="form-control" 
          placeholder="Enter Full City" name="city" required>
          
          <label class="form-lable">Country</label>
          <input type="text" class="form-control" 
          placeholder="Enter Full Country" name="country" required>
          
          <button type="submit" class="btn btn-outline-success">Submit</button>
        </form>
    </div>
</div>
<!--====form section start====-->

<h2 class="p1">
    <i class="fa-solid fa-fire"></i> usertable </h2>
<div class="content">
    <table class="table table-striped table-bordered table-hover"> <!--class="table table-striped" เป็นการทำให้ตารางสลับสี-->
        <thead>
            <th>ID</th>
            <th>FULLNAME</th>
            <th>EMAILADDRESS</th>
            <th>CITY</th>
            <th>COUNTRY</th>
            <th>CREATED_AT</th>
        </thead>
        <tbody>
<?php
    include"database.php";
    $sql="SELECT * FROM usertable";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->id?></td>
            <td><?=$row->fullName?></td>
            <td><?=$row->emailAddress?></td>
            <td><?=$row->city?></td>
            <td><?=$row->country?></td>
            <td><?=$row->created_at?></td>
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