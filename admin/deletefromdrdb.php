<?php
include('connection.php');

$id = $_GET['id'];
$delete = mysqli_query($conn, "delete from doctor_pending where id='$id'");
header("Location: doctors.php");

?>