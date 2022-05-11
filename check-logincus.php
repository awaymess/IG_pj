<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>ล็อคอินสำเร็จ</title>
  <link rel="stylesheet" href="stylecheck.css">

</head>

<body>
  <?php
  include "connect.php";
  session_start();
  
  $stmt = $pdo->prepare("SELECT * FROM user WHERE cususer = ? AND password = ?");
  $stmt->bindParam(1, $_POST["cususer"]);
  $stmt->bindParam(2, $_POST["password"]);
  $stmt->execute();
  $row = $stmt->fetch();

  echo $_POST['cususer'];
  echo $_POST['password'];
  $_SESSION['fullname'] = $row['cususer'];

  if (!empty($row)) {
    $_SESSION["fullname"] = $row["cususer"];
    $_SESSION["cususer"] = $row["cususer"];
    header("Location:index.php");
  } else {
    header("Location:login1.php");
  }

  ?>

</body>

</html>