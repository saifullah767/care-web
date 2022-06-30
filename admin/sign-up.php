<?php
include('connection.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Care - Hospital Admin</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css" />


</head>

<body class="theme-cyan authentication">
    <div class="container">
        <div class="card-top"></div>
        <div class="card">
            <h1 class="title"><span>Care Hospital</span>Register <span class="msg">Register a new membership</span></h1>
            <div class="body">
                <form method="post" enctype="multipart/form-data">
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-phone"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="cell" placeholder="Mobile Number" required="">
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon border-bottom pb-1"><i class="zmdi zmdi-account-circle"></i></span> &nbsp; &nbsp; &nbsp;
                        <select id="inputState" class="form-control border-bottom" name="role">
                            <option selected>Admin</option>
                        </select>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required="">
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="conpassword" minlength="6" placeholder="Confirm Password" required="">
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                    
                        <div class="custom-file">
                            <input type="file" name="pic" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose your picture</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="btn" class="btn btn-raised g-bg-cyan waves-effect" value="SIGN UP">
                    </div>
                    <br>
                    <div class="align-center">
                        <a href="sign-in.php">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

</html>

<?php

if (isset($_POST["btn"])) {
    $email = $_POST["email"];
    $a = mysqli_query($conn, "select * from admin_tbl where email='$email'");
    $b = mysqli_num_rows($a);
    $row = mysqli_fetch_array($a);

    if ($row[2] === $email) {
        echo "<script>alert('Already Registered with this email');</script>";
    } 
    else 
    {
        $name = $_POST["name"];
        $pass = $_POST["password"];
        if ($_POST["password"] === $_POST["conpassword"]) {
            $enpa = md5($pass);
        } else if ($_POST["password"] && $_POST["conpassword"] == null) {
            echo "<script>alert('Error');</script>";
        } else {
            echo "<script>alert('Password Not match');</script>";
        }
        $cell_num = $_POST["cell"];
        $ro = $_POST["role"];
        $img = $_FILES["pic"];
        $image_name = $_FILES["pic"]["name"];
        $old_path = $_FILES["pic"]["tmp_name"];
        $new_path = "assets/admin_imgs/" . $image_name;
        $type = $_FILES["pic"]["type"];
        if ($name && $email && $cell_num && $enpa && $image_name && $ro != null) {
            move_uploaded_file($old_path, $new_path);
            $done = mysqli_query($conn, "INSERT INTO `admin_tbl`(`name`,`email`,`cell`,`password`,`picture`,`role`) VALUES ('$name','$email','$cell_num','$enpa','$image_name','$ro')");
            echo "<script>window.location.href = 'sign-in.php'</script>";
        } else {
            echo "<script>alert('please fill complete details');</script>";
        };
    }
}
?>