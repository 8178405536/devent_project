<?php
include 'connection.php';
include 'common.php';
include 'checkauth.php';
// include 'uploadscript.php';


$message = '';
if (isset($_POST['submit'])) {

    $description =  $_POST['description'];
    $name = $_POST['name'];
    
    $insertquery = "INSERT INTO `testimonial`( `description`, `name`) VALUES ('$description','$name')";

    echo $insertquery;

    $res = mysqli_query($con, $insertquery);
    if ($res) {
        $message = "data inserted properly";
    } else {
        $message = "NOT Success";
    }
}


$sql = "SELECT * FROM `testimonial`";
$result = mysqli_query($con, $sql);

$testimonial = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($testimonial, $row);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>devent Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"> -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">

    
    <!-- End layout styles -->

</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.php -->
        <?php
        include 'nav.php';
        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.php -->
            <?php
            include 'header.php';
            ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                <div class="bulkupload">
                        <!-- <a href="testimonial_bulk.php">Bulk Upload</a> -->
                    </div>
                    <div class="page-header">
                        <!-- <h3 class="page-title"> Form elements </h3> -->
                        <nav aria-label="breadcrumb">
                            <!-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                            </ol> -->
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Testimonial</h4>
                                    <p class="card-description"> </p>
                                    <form class="forms-sample" action="testimonial.php" method="POST" >

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="testimonial Name">
                                            <!-- <input type="text" value="enter,skills,here" data-role="tagsinput"></input> -->

                                        </div>


                                        <div class="form-group">
                                            <label for="exampleTextarea1">Description</label>
                                            <textarea class="form-control" name="description" id="exampleTextarea1" rows="10"></textarea>
                                        </div>

                                        
                                        <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                                        <!-- <button class="btn btn-dark">Cancel</button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Testimonial List</h4>
                                    <!-- <p class="card-description"> Add class <code>.table</code> -->
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Delete</th>
                                                    <th>Update</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                foreach ($testimonial as $value) {
                                                    echo '<tr><td>' . $value['name'] . '</td><td><a href="delete_testimonial.php?id=' . $value['id'] . '"><label class="badge badge-danger">Delete</label></a></td><td><a href="testimonial_update.php?id=' . $value['id'] . '"><label class="badge badge-primary">Update</label></a></td>
                                                </tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.php -->
                <?php
                include 'footer.php';
                ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    z
    <!-- End custom js for this page -->
</body>

</html>