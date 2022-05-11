<!DOCTYPE html>
<html dir="ltr">

<!-- <?php
include("config.php");

if (isset($_POST['but_upload'])) {
    $name = $_FILES['file']['name'];
    $cususer = $_POST['cususer'];
    $nameuser = $_POST['nameuser'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        // Convert to base64 
        $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
        $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;

        // Insert record
        $query = "insert into user (name,images,cususer,nameuser,password,email) values('" . $name . "','" . $image . "','" . $cususer . "','" . $nameuser . "','" . $password . "','" . $email . "')";

        mysqli_query($con, $query) or die(mysqli_error($con));

        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $name);

        
    }
    header("Location:login1.php");
}
?> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="manager/assets/images/favicon.png">
    <title>Admintator</title>
    <!-- Custom CSS -->
    <link href="manager/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background-color: #f1f1f1 no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(ig.png);">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <!-- <img src="manager/assets/images/big/icon.png" alt="wrapkit"> -->
                        <h2 class="mt-3 text-center"><img src="images\ig.png" width="150"></h2>
                        <form method="post" action="" enctype='multipart/form-data'>
                            <input type='file' name='file' />
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="nameuser" type="text" placeholder="User">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="cususer" type="text" placeholder="your name">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="password" type="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Email Address">
                                    </div>
                                </div>


                                <div class="col-lg-12 text-center">
                                <!-- <input type="submit" class="btn btn-Block btn-dark" value='Sign Up' name='but_upload'> -->
                                    <button type="submit" class="btn btn-block btn-dark" name='but_upload'>Sign Up</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Already have an account? <a href="login1.php" class="text-danger">Log-In</a>
                                </div>
                            </div>

                        </form>



                        <!-- <form class="mt-4" action="register.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="nameuser" type="text" placeholder="your name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="cususer" type="text" placeholder="User">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="password" type="password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Email Address">
                                    </div>
                                </div>


                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Sign Up</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Already have an account? <a href="login1.php" class="text-danger">Log-In</a>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="manager/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="manager/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="manager/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>