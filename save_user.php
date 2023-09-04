<?php 
require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_secret = '6Lf91uYnAAAAAD-KCtJm_28xCp5s5sDVxLRbfNBI';
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = array(
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    );

    $recaptcha_options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptcha_data)
        )
    );

    $recaptcha_context = stream_context_create($recaptcha_options);
    $recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
    $recaptcha_response_data = json_decode($recaptcha_result, true);
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
    $user_image = $_FILES['user_image'];
    $insert_query = "INSERT INTO userdata (name, email, password,confirm_password, user_image) VALUES ('$name', '$email', '$password','$confirm_password', '$user_image[name]')";
    $stmt = $mysqli->query($insert_query);
  
    $upload_directory = 'user_images/';
    $uploaded_image_path = $upload_directory . basename($user_image['name']);
    move_uploaded_file($user_image['tmp_name'], $uploaded_image_path);

    echo "success";
    header("Location: add.php");
}
