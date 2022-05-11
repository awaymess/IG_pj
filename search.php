<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylecheck.css">

</head>
<?php
include "connect.php";
$stmt = $pdo->prepare("SELECT * FROM user WHERE cususer = '?' ");
$stmt->execute();
// username = ?, $stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(1, $_POST["cususer"]);
$stmt->execute();

echo$_POST["cususer"];

// header("Location:user-home.php");

// echo "<br><br><span class='echolost1'>" . "แก้ไขข้อมูลสำเร็จ" . "</span><br><br>";
// echo "<span class='los'>" . "<a href='user-home.php?nameuser=$_POST[nameuser]'>ย้อนกลับ</a>" . "</span><br>";
?>