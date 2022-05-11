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
    $stmt = $pdo->prepare("INSERT INTO product VALUES ('',?,?,?)");
    $stmt->bindParam(1, $_POST["PStatus"]);
    $stmt->bindParam(2, $_POST["Pname"]);
    $stmt->bindParam(3, $_POST["Pprice"]);
    if ($stmt->execute())
        header("location: insartproduct.php");

    ?>
</body>

</html>