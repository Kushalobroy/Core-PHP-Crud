<?php require "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $data = "SELECT * FROM userdata WHERE id={$id}";
    $result = $mysqli->query($data);
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <center>
    <h2>Edit</h2>
        <form action="">
            <input class="input-box" type="text" value="<?php  echo "$result[name] "?> "><br>
            <input class="input-box" type="text">
        </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
