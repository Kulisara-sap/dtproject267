<?php
    echo"<h2>การใช้ strlen</h2>";
    $strlen="I am a string";
    echo strlen($strlen); //นับจำนวนตัวอักษร(รวมตัวเว้นวรรคด้วย)
    $strlen2="มหาวิทยาลัย"; //ภาษาไทย 1 ตัว = ภาษาอังกฤษ 3 ตัว
    echo"<br>";
    echo strlen($strlen2);

    echo"<h2>การใช้งาน explode(การสร้างสติงจากอาร์เรย์)</h2>";
    $expStr="I am a string";
    $expArr=explode(' ',$expStr); //มีเว้นวรรคตรงไหนจะเก็บค่าตัวอักษรทั้งหมดก่อนเว้น
    print_r($expArr); //print_r ใช้ในการแสงดผลข้อมูลในอาร์เรย์
    echo"<br>";
    echo $expArr[0].$expArr[1].$expArr[2].$expArr[3];

    echo"<h2>การใช้งาน implode(การสร้างอาร์เรย์จากสติง)</h2>";
    $impArr=["I","am","an","array"];
    $impStr=implode($impArr);
    echo $impStr;
    echo"<br>";
    $filename=['img123','png'];
    $impFilename=implode('.',$filename); //เอา['img123','png'] มาเชื่อมด้วย "."
    echo $impFilename[0].$impFilename[1].$impFilename[2].
    $impFilename[3].$impFilename[4].$impFilename[5];
    echo"<br>";
    echo $filename[0]."<br>";
    echo $impFilename;

    echo"<h2>การเข้ารหัสแบบ md5 (มี 32 ตัวอักษร)</h2>";
    $password = "lantao"; //ภาษาไทยหรืออังกฤษก็ได้
    $hashValue = md5($password);
    echo $hashValue;
    echo"<br>";

    echo"<h2>การเข้ารหัสแบบ sha256 (ปลอดภัยมากกว่าเพราะมี 64 ตัวอักษร)</h2>";
    echo"การเข้ารหัสแบบ SHA-256 เป็นการเข้ารหัสแบบทางเดียว เนื่องจาก SHA-256 เป็นฟังก์ชันแฮชที่ออกแบบ
    มาเพื่อความปลอดภัยไม่มีคำสั่งหรือวิธีการที่สามารถแปลงกลับ ข้อความที่ถูกแฮชด้วย SHA-256
    กลับไปเป็นข้อความต้นฉบับได้โดยง่าย";
    echo"<hr>";
    $password = "pitboo"; //ภาษาไทยหรืออังกฤษก็ได้
    $hashValue = hash('sha256',$password);
    echo $hashValue;
    //หากต้องการแปลงค่ากลับ https://md5decrypt.net/
    echo"<br>";

    $storedData="358d0ea28a987530d47b4651b170b13dd570f345a967cd68d2085d82a9f28225";
    $originalText="pitboo";

    if(hash_equals(hash('sha256',$originalText),$storedData)){
        echo"ล็อคอินสำเร็จ";
    } else {
        echo"รหัสผ่านไม่ถูกต้อง";
    }


?>