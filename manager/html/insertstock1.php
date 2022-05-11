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
    include "../../connect.php";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("INSERT INTO stock VALUES ('',?,?,?,?,?,?)");
    $stmt->bindParam(1, $_POST["Sname"]);
    $stmt->bindParam(2, $_POST["SAmount"]);
    $stmt->bindParam(3, $_POST["SPrice"]);
    $stmt->bindParam(4, $_POST["Sdate"]);
    $stmt->bindParam(5, $_POST["Supdate"]);
    $stmt->bindParam(6, $_POST["employeename"]);
    if ($stmt->execute()) 
    header("location: stock.php");

    ?>
</body>

</html>