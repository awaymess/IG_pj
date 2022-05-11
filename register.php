<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    session_start();
    include "connect.php";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO user VALUES (NULL,?,?,?,?, '', '')");
    $stmt->bindParam(1, $_POST["cususer"]);
    $stmt->bindParam(2, $_POST["nameuser"]);
    $stmt->bindParam(3, $_POST["password"]);
    $stmt->bindParam(4, $_POST["email"]);


    // if (trim($_POST["custel"]) == "") {
    //         echo "<span class='echolost1'>" . "กรุณากรอกเบอร์โทร" . "</span>";
    //         echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
    //         exit();
    //     }
    // if (trim($_POST["cusname"]) == "") {
    //         echo "<span class='echolost1'>" . "กรุณากรอกชื่อ-สกุล" . "</span>";
    //         echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
    //         exit();
    //     }
    // if (trim($_POST["cususer"]) == "") {
    //         echo "<span class='echolost1'>" . "กรุณากรอกชื่อบัญชีผู้ใช้" . "</span>";
    //         echo "<span class='los '>" . "<a href=\"javascript:history.go(-1)\">ย้อนกลับ</a>" . "</span>";
    //         exit();
    //     }

    $stmt->execute();
    header("Location:login1.php");

    ?>
</body>

</html>