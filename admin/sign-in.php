<?php
include ('connection.php');
session_start();
?>


<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Care - Hospital Admin </title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css"/>

</head>

<body class="themyan authentication">
<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Care Hospital</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="body">
            <form method="post">
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="email" required autofocus>
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                     <input type="submit" class="btn btn-raised waves-effect g-bg-cyan" name="btn" value="SIGN IN"> &nbsp; &nbsp;
                        <a href="sign-up.php" class="btn btn-raised waves-effect">SIGN UP</a>
                    </div>
                    <br>
                    <div class="text-center"> <a href="forgot-password.php">Forgot Password?</a></div>
                </div>
            </form>
        </div>
    </div>    
</div>
<div class="themg"></div>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

</html>

<?php
if (isset($_POST["btn"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $enpa = md5($pass);

    $a = mysqli_query($conn, "select * from admin_tbl where email='$email' && password='$enpa'");
    $b = mysqli_num_rows($a);
    $row = mysqli_fetch_array($a);
    if ($b) {
        $_SESSION["email"] = $row[2];
        header("Location: index.php");
    } else {
       echo "<script>alert('No Userfound')</script>";
    }
}
?>