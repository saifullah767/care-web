<?php
  include('connection.php');
?>

<?php
   $id = $_GET['id'];
   $a = mysqli_query($conn,"select * from doctor_pending where id='$id'");
   $b= mysqli_num_rows($a);
   $data = mysqli_fetch_array($a);
   $name = $data["name"];
   $email = $data["email"];
   $passwrd = $data["password"];
   $enpa = md5($passwrd);
   $speciality = $data['speciality'];
   $degree_name = $data["degree_name"];
   $dr_address = $data["dr_address"];
   $cell_num = $data["cell"];
   $image_name = $data['pic'];
   $speciality2 = $data['speciality_2'];
   $speciality3 = $data['speciality_3'];
   $Education_bg = $data['edu_bg'];
   $available_Days = $data["avail_days"];
   $available_time = $data["avail_time"];
   $apt_date = $data['date'];
   $apt_time = $data['time'];
   $gender = $data['gender'];
   $status = "approved";
   $done = mysqli_query($conn, "INSERT INTO `doctor_tbl`(`name`, `email`, `password`, `pic`, `dr_address`, `speciality`, `degree_name`, `speciality_2`, `speciality_3`, `cell`, `gender`, `edu_bg`, `avail_days`, `avail_time`,`status`) VALUES ('$name','$email','$enpa','$image_name','$dr_address','$speciality','$degree_name','$speciality2','$speciality3','$cell_num','$gender','$Education_bg','$available_Days','$available_time','$status')");
   $delete = mysqli_query($conn, "delete from doctor_pending where id='$id'");
   header("Location: doctors.php");
?>