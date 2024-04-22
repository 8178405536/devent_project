<?php
$fileUploadError='';
$fileName=array();

if(isset($_POST["submit"])) {
  $target_dir = "uploads/";
  // echo count($_FILES['picture']['name']);
for($i=0;$i<count($_FILES['picture']['name']);$i++)
{
  if ($_FILES["picture"]["tmp_name"][$i]){
$target_file = $target_dir .rand(0,99999). basename($_FILES["picture"]["name"][$i]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["picture"]["tmp_name"][$i]);
  if($check !== false) {
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
// if ($_FILES["picture"]["size"][$i] > 500000) {
//   $fileUploadError = "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $fileUploadError = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

  if (move_uploaded_file($_FILES["picture"]["tmp_name"][$i], $target_file)) {
    array_push($fileName,htmlspecialchars($target_file));
  } else {
    $fileUploadError = "Sorry, there was an error uploading your file.";
  }
}}}
