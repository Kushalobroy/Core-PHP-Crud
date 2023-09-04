<?php require "config.php";


$id = $_REQUEST['id'];
$data = "SELECT * FROM userdata WHERE id={$id}";
$result = $mysqli->query($data);
$row = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-sm">
        <h2 class="text-center mt-5">Edit</h2>
        <form action="./update.php?id=" <?php echo $row['id'] ?>" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-3">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="name" value="<?php echo $row['name']; ?>" />
                        <label class="form-label" for="form3Example1">Name</label>
                    </div>
                </div>

            </div>

            <!-- Email input -->
            <div class="form-outline mb-3">
                <input type="email" id="form3Example3" class="form-control" name="email" value="<?php echo $row['email']; ?>" />
                <label class="form-label" for="form3Example3">Email address</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Your Image</label>
            </div>
            <div class="mb-3">
                <img class="w-25 h-25" src="./user_images/<?php echo $row['user_image']; ?>" alt="">
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" id="formFile" name="user_image" accept=".png">
                <label for="formFile" class="form-label">Update Image</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>