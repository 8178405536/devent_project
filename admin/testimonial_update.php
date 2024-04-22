<?php
include 'connection.php';
include 'common.php';
include 'checkauth.php';
// include 'uploadscript.php';


if (isset($_GET['id'])) {

    $sql = "SELECT * FROM `testimonial` where id = " . $_GET['id'];
    $result = mysqli_query($con, $sql);

    $testimonial = [];

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $testimonial = $row;
        }
    }
}



if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];

    $id = $_POST['id'];


    $updatequery = "UPDATE `testimonial` SET `name` = '$name',  `description` = '$description' WHERE `testimonial`.`id` = $id";



    $res = mysqli_query($con, $updatequery);
    if ($res) {

        echo '<script>alert("Data Updated Success")</script>';
    } else {
        echo '<script>alert("NOT Update")</script>';
    }

    echo '<script>window.location.href = window.location.href.replace("testimonial_update.php","testimonial.php");</script>';
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

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/style.css">
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
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Testimonial</h4>
                                    <p class="card-description"> </p>
                                    <form class="forms-sample" action=" testimonial_update.php" method="POST" >
                                        <div>
                                            <input name='id' value="<?php echo $testimonial['id']; ?>" type="hidden" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Testimonial Name" value="<?php echo $testimonial['name']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleTextarea1">Description</label>
                                            <textarea class="form-control" name="description" id="exampleTextarea1" rows="10"><?php echo $testimonial['description']; ?></textarea>
                                        </div>

                                        <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                                        <!-- <button class="btn btn-dark">Cancel</button> -->
                                    </form>
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

    <!-- End custom js for this page -->
</body>

</html>