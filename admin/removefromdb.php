<?php
include('connection.php');

$id = $_GET['id'];
$delete = mysqli_query($conn, "delete from pending_users where id='$id'");
header("Location: add-patient.php");

?>