<?php include "../../connect.php" ?>
<?php
$stmt = $pdo->prepare("DELETE FROM orders WHERE orders_id=?");
$stmt->bindParam(1, $_GET["orders_id"]);
if ($stmt->execute()) 
    header("location: orderscus.php");
?>