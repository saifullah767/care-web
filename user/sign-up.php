<?php
include('connection.php');
?>
<?php
if (isset($_POST['btn'])) {
    $email = $_POST["email"];
    $a = mysqli_query($conn, "select * from user_tbl where email='$email'");
    $b = mysqli_num_rows($a);
    $row = mysqli_fetch_array($a);

    if ($row['email'] === $email) {
        echo "<script>alert('Already Registered with this email');</script>";
    } 
    else{
    $user_name = $_POST["name"];
    $cell_num = $_POST["cell"];
    $age = $_POST["age"];
    $pass = $_POST["password"];
    $disease = $_POST['disease'];
    if ($pass === $_POST["repassword"]) {
        $enpa = md5($pass);
        echo "<script>alert('Password matched');</script>";

    } else {
        echo "<script>alert('Password Not match');</script>";
    }
    $done = mysqli_query($conn, "INSERT INTO `pending_users`(`name`,`email`,`cell`, `age`, `password`,`disease`) VALUES ('$user_name','$email','$cell_num','$age','$enpa','$disease')");
    header("Location: sign-in.php");
}
}

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="main-2">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="cell"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="cell" id="" placeholder="Your Cell Number" />
                            </div>
                            <div class="form-group">
                                <label for="disease"><i class="zmdi zmdi-alert-polygon"></i></label>
                                <input type="text" name="disease" id="" placeholder="Disease" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-account"></i></label>
                                <input type="number" name="age" id="pass" placeholder="Age" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" id="re_pass" name="repassword" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="btn" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg?size=338&ext=jpg" alt="sing up image"></figure>
                        <a href="sign-in.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>