<!DOCTYPE html>
<html lang="en">
<?php include "connect.php";
session_start();
if (empty($_SESSION["cususer"])) {
	header("location: login1.php");
}
$user = $_SESSION['cususer']



?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
        
        $stmt = $pdo->prepare("INSERT INTO `comment` (`cid`, `comment`, `id` , usercom ) VALUES (NULL, ?, ?,?);");
        $stmt->bindParam(1, $_GET["comment"]);
        $stmt->bindParam(2, $_GET["id"]);
        $stmt->bindParam(3, $_GET["usercom"]);
        $stmt->execute();
        $row = $stmt->fetch();
        header("Location:index.php");
    
    ?>
    
</body>
</html>