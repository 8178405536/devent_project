<?php
include 'common.php';

include 'connection.php';
include 'checkauth.php';
$sql = "DELETE FROM `slider` WHERE id=". $_GET["id"];
$result=mysqli_query($con, $sql);
if ($result) {
    echo "<script>alert('Record deleted successfully')</script>";
} else {
    echo "<script>alert('Error deleting record: " . mysqli_error($con)."')</script>";
}
echo '<script>window.location.href = window.location.href.replace("delete_slider.php","slider.php");</script>';

?>