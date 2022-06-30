<?php
include('connection.php');

?>

<?php

if (isset($_POST["btn"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $passwrd = $_POST["password"];
        $enpa = md5($passwrd);
        $speciality = $_POST['speciality'];
        $degree_name = $_POST["degree_name"];
        $dr_address = $_POST["address"];
        $cell_num = $_POST["cell"];
        $speciality2 = $_POST['speciality2'];
        $speciality3 = $_POST['speciality3'];
        $Education_bg = $_POST['edu_bg'];
        $available_Days = $_POST["avail_days"];
        $available_time = $_POST["avail_time"];
        $gender = $_POST['gender'];
        $img = $_FILES["pic"];
        $image_name = $_FILES["pic"]["name"];
        $old_path = $_FILES["pic"]["tmp_name"];
        $new_path = "assets/dr_imgs/" . $image_name;
        move_uploaded_file($old_path, $new_path);
        $done = mysqli_query($conn, "INSERT INTO `doctor_pending`(`name`, `email`, `password`, `pic`, `dr_address`, `speciality`, `degree_name`, `speciality_2`, `speciality_3`, `cell`, `gender`, `edu_bg`, `avail_days`, `avail_time`) VALUES ('$name','$email','$enpa','$image_name','$dr_address','$speciality','$degree_name','$speciality2','$speciality3','$cell_num','$gender','$Education_bg','$available_Days','$available_time')");
        header("Location: sign-in.php");
}

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
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="speciality" placeholder="speciality" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="speciality2" placeholder="Write your second speciality" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="speciality3" placeholder=" Write your third speciality" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="edu_bg" placeholder="Education background" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="degree_name" placeholder="degree name" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="avail_days" placeholder="Available days" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="avail_time" placeholder="Available time" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="" autofocus>
                        </div>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon border-bottom pb-1"><i class="zmdi zmdi-account-circle"></i></span> &nbsp; &nbsp; &nbsp;
                        <select id="inputState" class="form-control border-bottom" name="gender">
                            <option selected>--gender--</option>
                            <option >Male</option>
                            <option >Female</option>
                        </select>
                    </div>
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="">
                        </div>
                    </div>
                    
                    <div class="input-group icon before_span">
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="conpassword" placeholder="Confirm Password" required="">
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