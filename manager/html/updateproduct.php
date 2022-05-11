<?php include "../../connect.php" ?>
<?php
$stmt = $pdo->prepare("UPDATE product SET PStatus=? ,Pname=? , Pprice=? WHERE Pid=?");

$stmt->bindParam(1, $_POST["PStatus"]);
$stmt->bindParam(2, $_POST["Pname"]);
$stmt->bindParam(3, $_POST["Pprice"]);
$stmt->bindParam(4, $_POST["Pid"]);
if ($stmt->execute()) 
    header("location: updateproduct1.php");

?>