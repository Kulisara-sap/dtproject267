<?php
    $name='สมชาย';
    $age=30;
    $career='รับจ้างทั่วไป';
    echo"ชื่อ : ".$name. "<br>อายุ : " .$age. " ปี<br>อาชีพ  : ".$career; // ใช้ . เป็นตัวเชื่อมก็ได้
    echo"<hr>";
    echo"ชื่อ : $name<br>อายุ : $age ปี<br>อาชีพ  : $career"; //เขียนเหมือนบรรทัดบน แค่เขียนอยู่ใน " " คู่เดียว
    echo"<hr>";
    echo'ชื่อ : $name<br>อายุ : $age ปี<br>อาชีพ  : $career'; //เปลี่ยนจาก Double quotes เป็น Single quotes (ผลลัพธ์เปลี่ยน)
    echo"<hr>";
    echo"อายุ : {$age}$"; //กรณีที่ต้องการเขียนตัวอักขระพิเศษติดกับตัวแปรให้เขียนตัวแปรใน {} ก่อน
    echo"<hr>";
    
    echo"<h2>ตัวอย่างการใช้งาน Operator</h2>";
    $num1=10;
    $num2=20;
    $sum=$num1+$num2;
    echo"ผลรวมเท่ากับ : ".$sum;
    $sum+=5; //sum=sum+5
    $sum-=3; //sum=sum-3
    echo" ผลรวมเท่ากับ : ".$sum;
    echo"<hr>";

    echo"<h2>ตัวอย่างการเพิ่ม-ลดค่า Operator</h2>";
    $count=1;
    $count++; //เพิ่มทีละ 1
    $count+=2; //เพิ่มทีละ 2
    $count*=2; // count=count*2 
    echo $count;

    echo"<h2>เงื่อนไขแบบ Ternary</h2>";
    $x=30;
    $b=($x % 2 ==0) ? 'เลขคู่' : 'เลขคี่';
    echo"ผลลัพธ์คือ : ".$b;
    echo"<br>";
    $user= 'user1';
    $password= '1234';
    $msg = ($user=='' || $password=='') ? 'กรุณากรอกข้อมูล' : 'ขอบคุณ'; //ทั้งuserกับpasswordไม่ใช่ค่าว่างจึงแสดงผลคำว่า'ขอบคุณ'
    echo $msg;

    echo"<h2>เช็คค่าว่าง</h2>";
    $user= 'user1';
    $password= '1234';
    if(empty($user) || empty($password)){
        $msg="กรุณากรอกข้อมูล";
    }
    else{
        $msg="ขอบคุณ";
    }
    echo $msg;

    echo"<hr>";
    echo"<h2>การใช้งาน if-else </h2>";
    $status="manager"; //admin,member,manager มี 3 สถานะ
    if($status=="admin"){
        echo"i am admin";
    }
    elseif($status=="member"){
        echo"i am member";
    }
    elseif($status=="manager"){
        echo"i am manager";
    }
    else{
        echo"invalid user status!!!";
    }

    echo"<hr>";
    echo"<h2>การใช้เครื่องหมายเปรียบเทียบ</h2>";
    $pw1 = 123;
    $pw2 = 456;
    if($pw1 != $pw2){ //ใช้เครื่องหมาย <> แทน != ก็ได้
    echo 'รหัสผ่านไม่ตรงกัน';
    }
    else{
    echo 'รหัสผ่านตรงกัน';
    }
?>