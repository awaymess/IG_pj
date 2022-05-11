<?php include "../../connect.php" ?>
<?php
$stmt = $pdo->prepare("DELETE FROM product WHERE Pid=?");
$stmt->bindParam(1, $_GET["Pid"]);
if ($stmt->execute()) 
    header("location: updateproduct1.php");
?>