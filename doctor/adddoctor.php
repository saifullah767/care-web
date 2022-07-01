<?php
include('index.php');

?>

<?php
$a = mysqli_query($conn, "select * from doctor_pending");
$b = mysqli_num_rows($a);
?>

?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Doctor</h2>
            <small class="text-muted">Welcome to Care application</small>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> New Doctor List <small>Description text here...</small> </h2>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Speciality</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while($rows = mysqli_fetch_array($a)) {?>
                                            <tr>
                                                <td ><?php echo $rows['id'];?></td>
                                                <td ><?php echo $rows['name'];?></td>
                                                <td ><?php echo $rows['email'];?></td>
                                                <td ><span class="btn disabled btn-danger"><?php echo $rows['speciality']?></span> </td>
                                                <td><button class="btn btn-success"><a class="text-light" href="addtodrdb.php?id=<?php echo $rows['id']?>">Accept</a></button> <button class="btn btn-danger"><a href="removefromdrdb.php?id=<?php echo $rows['id'];?>">Reject</a></button> </td>
                                            </tr>
                                      <?php  }
                                      ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</section>