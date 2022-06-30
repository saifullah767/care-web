<?php
  include('connection.php');
?>

<?php
   $id = $_GET['id'];
   $a = mysqli_query($conn,"select * from pending_users where id='$id'");
   $b= mysqli_num_rows($a);
   $data = mysqli_fetch_array($a);
   $user_name = $data['name'];
   $email = $data['email'];
   $cell_num = $data['cell'];
   $age = $data['age'];
   $password = $data['password'];
   $status = "approved";
   $done = mysqli_query($conn, "INSERT INTO `user_tbl`(`name`,`email`,`password`,`cell`,`age`,`status`) VALUES ('$user_name','$email','$password','$cell_num','$age','$status')");
   $delete = mysqli_query($conn, "delete from pending_users where id='$id'");
   header("Location: add-patient.php");
?>