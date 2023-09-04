<?php
require "config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];


    $delete_query = "DELETE FROM userdata WHERE id = {$id}";
    $res = $mysqli->query($delete_query);

    header("Location: index.php");
    exit();
}
