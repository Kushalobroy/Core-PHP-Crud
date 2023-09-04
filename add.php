<?php require "config.php"?>
<!DOCTYPE html>
<html>

<head>
  <title>User Registration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container-sm">
    <h2 class="text-center mt-5">Add User</h2>

    <form action="save_user.php" id="registration-form" enctype="multipart/form-data" method="post">

      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-3">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form3Example1" class="form-control" name="name" />
            <label class="form-label" for="form3Example1">Name</label>
          </div>
        </div>

      </div>

      <!-- Email input -->
      <div class="form-outline mb-3">
        <input type="email" id="form3Example3" class="form-control" name="email" />
        <label class="form-label" for="form3Example3">Email address</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-3">
        <input type="password" id="form3Example4" class="form-control" name="password" />
        <label class="form-label" for="form3Example4">Password</label>
      </div>
      <!-- Confirm Password input -->
      <div class="form-outline mb-3">
        <input type="password" id="form3Example4" class="form-control" name="confirm_password" />
        <label class="form-label" for="form3Example4">Confirm Password</label>
      </div>
      <div class="mb-3">

        <input class="form-control" type="file" id="formFile" name="user_image" accept=".png">
        <label for="formFile" class="form-label">Image</label>
      </div>
      <div class="mb-3">
        <div class="g-recaptcha" data-sitekey="6Lf91uYnAAAAANIyw8ReKKqmJIpho30XybP9sA4T"></div>
      </div>
      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Add</button>
      <button class="btn btn-success mb-4"><a href="./index.php" style="text-decoration: none; color: white;">See
          Users</a></button>
  </div>

  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>