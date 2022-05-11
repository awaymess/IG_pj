<?php include "../../connect.php" ?>
<?php
$stmt = $pdo->prepare("DELETE FROM stock WHERE stockid=?");
$stmt->bindParam(1, $_GET["stockid"]);
if ($stmt->execute()) 
    header("location: stock.php");
?>