<?php include "../../connect.php";
session_start();
$user = $_SESSION['cususer'];
?>

<?php
$_GET["orders_id"];
$stmt = $pdo->prepare("UPDATE orders SET status='3' WHERE idorder=?");
$stmt->bindParam(1, $_POST["idorder"]);
if ($stmt->execute())
    header('location: orderscus.php');

// header('location: orderscusshow.php?orders_id=<?=$row["orders_id"] ');
// $row = $stmt->fetch();

// echo "แกไ้ขส";
?>