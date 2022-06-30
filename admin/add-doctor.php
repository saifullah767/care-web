<?php
session_start();
include('index.php');

?>

<?php

if (isset($_POST["btn"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $dr_address = $_POST["address"];
        $apt_day = $_POST['day'];
        $apt_date = $_POST['date'];
        $apt_time = $_POST['time'];
        $speciality = $_POST['speciality'];
        $cell_num = $_POST["cell"];
        $gender = $_POST['gender'];
        $img = $_FILES["pic"];
        $image_name = $_FILES["pic"]["name"];
        $old_path = $_FILES["pic"]["tmp_name"];
        $new_path = "assets/dr_imgs/" . $image_name;
        move_uploaded_file($old_path, $new_path);
        $done = mysqli_query($conn, "INSERT INTO `doctor_tbl`(`fname`,`lname`,`pic`,`dr_address`,`apt_day`,`apt_date`,`apt_time`,`speciality_1`,`cell`,`gender`) VALUES ('$fname','$lname','$image_name','$dr_address','$apt_day','$apt_date','$apt_time','$speciality','$cell_num','$gender')");
}

?>




<link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css"> <!-- Dropzone Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" /><!-- Bootstrap Material Datetime Picker Css -->

<!-- Wait Me Css -->
<link rel="stylesheet" href="assets/plugins/waitme/waitMe.css" />

<section class="content">
    <div class="container-fluid">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="block-header">
            <h2>Add Doctor</h2>
            <small class="text-muted">Welcome to Care application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Basic Information <small>Description text here...</small> </h2>
                    </div>
                    <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="fname" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick" name="gender">
                                            <option >-- Gender --</option>
                                            <option >Male</option>
                                            <option >Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="speciality" class="form-control" placeholder="Speciality">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="cell" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group drop-custum">
                                        <select class="form-control show-tick" name="day">
                                            <option >Monday</option>
                                            <option >Tuesday</option>
                                            <option >Wednesday</option>
                                            <option >Thursday</option>
                                            <option >Friday</option>
                                            <option >Saturday</option>
                                            <option >Sunday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="date" class="form-control" placeholder="Appointment Day">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="time" name="time" class="form-control" placeholder="Appointment time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 pb-2">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="customFile">Choose your picture</label>
                                            <input type="file" name="pic" class="custom-file-input" id="customFile">
                                        </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" name="address" class="form-control no-resize" placeholder="Address..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Doctor's Account Information <small>Description text here...</small> </h2>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" name="conpassword" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-raised g-bg-cyan">Submit</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
        </div>
    </form>
    </section>
    
    <script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js -->
    <script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
    <script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
    <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>