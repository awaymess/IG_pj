<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylecheck.css">

</head>
<?php
include "connect.php";
$stmt = $pdo->prepare("UPDATE user SET  email = ?, password = ?, nameuser = ?, status = ?, bio = ? WHERE nameuser = ?");
// username = ?, $stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(1, $_POST["email"]);
$stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["nameuser"]);
$stmt->bindParam(4, $_POST["status"]);
$stmt->bindParam(5, $_POST["bio"]);
$stmt->bindParam(6, $_POST["nameuser"]);
$stmt->execute();
$row = $stmt->fetch();

header("Location:user-home.php");

// echo "<br><br><span class='echolost1'>" . "แก้ไขข้อมูลสำเร็จ" . "</span><br><br>";
// echo "<span class='los'>" . "<a href='user-home.php?nameuser=$_POST[nameuser]'>ย้อนกลับ</a>" . "</span><br>";
?>
