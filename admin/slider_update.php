<?php
include 'connection.php';
include 'common.php';
include 'checkauth.php';
include 'uploadscript.php';


if (isset($_GET['id'])) {

    $sql = "SELECT * FROM `slider` where id = " . $_GET['id'];
    $result = mysqli_query($con, $sql);

    $slider = [];

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $slider = $row;
        }
    }
}



if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $picture = $fileName;

    $id = $_POST['id'];

    if ($fileName != '') {
        $updatequery = "UPDATE `slider` SET `name` = '$name',  `picture` = '$picture' WHERE `slider`.`id` = $id";
    } else {
        $updatequery = "UPDATE `slider` SET `name` = '$name' WHERE `slider`.`id` = $id";
    }

    $res = mysqli_query($con, $updatequery);
    if ($res) {

        echo '<script>alert("Data Updated Success")</script>';
    } else {
        echo '<script>alert("NOT Update")</script>';
    }

    echo '<script>window.location.href = window.location.href.replace("slider_update.php","slider.php");</script>';
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
    <script src="https://cdn.tiny.cloud/1/ce1zol3596l47q72c95fhnqiirrppgnlk6979frn4kfwdn7x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                                    <h4 class="card-title">Update Slider</h4>
                                    <p class="card-description"> </p>
                                    <form class="forms-sample" action="slider_update.php" method="POST" enctype="multipart/form-data">
                                        <div>
                                            <input name='id' value="<?php echo $slider['id']; ?>" type="hidden" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" name="name" placeholder="Brand Name" value="<?php echo $slider['name']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Slider Image</label>
                                            <input type="file" name="picture" class="file-upload-default" value="<?php echo $slider['picture']; ?>">
                                            <div class="input-group col-xs-12">
                                                <input class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
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
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
    <!-- End custom js for this page -->
</body>

</html>