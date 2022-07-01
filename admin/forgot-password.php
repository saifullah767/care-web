<?php
  include("connection.php");

?>

<?php
 if(isset($_POST['btn'])){
     $email = $_POST["email"];
     $a = mysqli_query($conn, "select * from admin_tbl where email='$email'");
    $row = mysqli_fetch_array($a);

     if($row['email'] == $email){
         header('Location: index.php');
    //    echo "<script>window.location.href='index.php'</script>";
        }
       else{
       echo "<script>alert('No User found')</script>";
       echo "<script>window.location.href = 'sign-in.php'</script>";
       }
    }
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Care - Hospital Admin ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css"/>

</head>

<body class="theme-cyan authentication">
<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Care Hospital</span>Forgot Password? <div class="msg">Enter your e-mail address below to reset your password.</div></h1>
        <div class="body">
            <form method="post">
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-email"></i> </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>
                </div>              
                <div class="row">                    
                    <div class="col-sm-12 text-center">
                        <input type="submit" name="btn" value="RESET MY PASSWORD" class="btn btn-raised waves-effect g-bg-cyan">
                    </div>
                    <div class="col-sm-12 text-center"> <a href="sign-in.php">Sign In!</a> </div>
                </div>
            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

</html>