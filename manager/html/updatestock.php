<?php include "../../connect.php" ?>
<?php
$stmt = $pdo->prepare("UPDATE stock SET Sname=? ,SAmount=? , SPrice=? , Supdate=?, employeename=?  WHERE stockid=?");

$stmt->bindParam(1, $_POST["Sname"]);
$stmt->bindParam(2, $_POST["SAmount"]);
$stmt->bindParam(3, $_POST["SPrice"]);
$stmt->bindParam(4, $_POST["Supdate"]);
$stmt->bindParam(5, $_POST["employeename"]);
$stmt->bindParam(6, $_POST["stockid"]);
if ($stmt->execute()) 
    header("location: stock.php");

?>