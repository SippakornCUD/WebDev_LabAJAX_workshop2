<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");

$stmt=$pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1,$_GET["username"]);
$stmt->execute();
$row=$stmt->fetch();
if(!empty($row)):
?>
    <div>
        ชื่อผู้ใช้ : <?=$row["name"]?> <br>
        ที่อยู่ : <?=$row["address"]?> <br>
        เบอร์โทรศัพท์ : <?=$row["mobile"]?> <br>
        อีเมล์ : <?=$row["email"]?>
    </div>
<?php else:?>
    <div>ไม่พบ Username นี้</div>
<?php endif;?>