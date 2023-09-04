<?php
require "config.php";
$id=$_REQUEST['id'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$user_image = $_FILES['user_image'];
$update = "UPDATE userdata SET name='$name', email='$email', user_image='$user_image[name]' WHERE id={$id}";
$upload_directory = 'user_images/';
$uploaded_image_path = $upload_directory . basename($user_image['name']);
move_uploaded_file($user_image['tmp_name'], $uploaded_image_path);

$res = $mysqli->query($update);
echo "Updated Successfully !";
header("Location:index.php");
