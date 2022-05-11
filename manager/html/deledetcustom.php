<?php include "../../connect.php" ?>
<?php
$stmt = $pdo->prepare("DELETE FROM customer WHERE CusTel=?");
$stmt->bindParam(1, $_GET["CusTel"]);
if ($stmt->execute()) 
    header("location: custommanage.php");
?>