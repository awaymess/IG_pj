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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylrlogout.css">
</head>

<body>
    <?php


    $stmt = $pdo->prepare("SELECT * FROM user WHERE cususer = '$user'");
    $stmt->execute();
    $row = $stmt->fetch();

    ?>

    <span class='echot'><b><br>ตั้งค่าบัญชี</b><br><?= $_SESSION["fullname"] ?></span>
    <div class="box">

        

        <form action="userupdate.php" method="POST">

            <input type="hidden" name="nameuser" value="<?= $row['nameuser'] ?>" />

            <div class="textbox">
                <b>ชื่อบัญชีผู้ใช้ : </b><?= $row["nameuser"] ?>
                <input type="hidden" value="<?= $row["nameuser"] ?>" name="nameuser" placeholder="ชื่อผู้ใช้">
                <!-- <b>ชื่อบัญชีผู้ใช้ : </b><input type="text" value="." name="username" placeholder="ชื่อบัญชีผู้ใช้"> -->
            </div>

            <div class="textbox">
                <b>Email : </b><input type="text" value="<?= $row["email"] ?>" name="email" placeholder="Email">
            </div>
            <div class="textbox">
                <b>รหัสผ่าน : </b><input type="text" value="<?= $row["password"] ?>" name="password" placeholder="รหัสผ่าน">
            </div>

            <div class="textbox">
                <b>Status : </b><input type="text" value="<?= $row["status"] ?>" name="status" placeholder="Status">
            </div>
            <div class="textbox">
                <b>Bio : </b><input type="text" value="<?= $row["bio"] ?>" name="bio" placeholder="Bio">
            </div>


            <input type="submit" class="btn" value="ยืนยัน">
            <!-- <span class='btn'><a href='login-form.php'>เข้าสู่ระบบ</a></span> หน้าหลัก index -->

        </form>
        <h2><b><span><a  href='gallery.php'>Profile</a></span></b></h2>
        <h2><b><span><a href='logout.php'>ออกจากระบบ</a></span></b></h2>
        

    </div>

</body>

</html>