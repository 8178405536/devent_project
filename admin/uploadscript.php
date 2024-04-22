<?php
$fileUploadError = '';
$fileName = '';
if ((isset($_POST["submit"]) || $_SERVER['REQUEST_METHOD'] === 'POST') && $_FILES["picture"]["tmp_name"] != '') {
  $target_dir = "uploads/";
  $fileName = rand(0, 99999) . basename($_FILES["picture"]["name"]);
  $target_file = $target_dir . $fileName;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["picture"]["tmp_name"]);
  if ($check !== false) {
  } else {
    $fileUploadError = "File is not an image.";
    $uploadOk = 0;
  }


  // Check if file already exists
  if (file_exists($target_file)) {
    $fileUploadError = "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["picture"]["size"] > 50000000) {
    $fileUploadError = "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    $fileUploadError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
    $fileName = htmlspecialchars($fileName);
  } else {
    $fileUploadError = "Sorry, there was an error uploading your file.";
  }
}
