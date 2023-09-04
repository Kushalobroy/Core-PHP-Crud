<?php
require "config.php"
?>
<?php
$viewquery = "SELECT * FROM userdata;";
$result = $mysqli->query($viewquery);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>View Data</title>
</head>

<body>
    <center>
        <h2 class="heading">USERS</h2>
        <div class="container">
            <button class="btn btn-primary text-right"><a href="./add.php" style="text-decoration: none; color: white;">Add User</a></button>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tr class="">
                        <th class="">Name</th>
                        <th class="">Email</th>
                        <th>Image</th>
                        <th class="" colspan="2">Action</th>
                    </tr>
                    <?php
                    if ($result) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr class="">
                                    <td class=""><?php echo "$row[name]" ?> </td>
                                    <td class=""><?php echo "$row[email]" ?> </td>
                                    <td> <img src="./user_images/<?php echo "$row[user_image]" ?>" style="width: 150px;height: 150px;"></td>
                                    <td class="">
                                        <form action="delete_user.php?id=" <?php echo $row['id'] ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $row['id'] ?> ">
                                            <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                                        </form>
                                    </td>
                                    <td class="Tdata">
                                        <form action="edit_user.php?id=" <?php echo $row['id'] ?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $row['id'] ?> ">
                                            <input class="btn btn-warning" type="submit" name="submit" value="Edit">
                                        </form>
                                    </td>
                                </tr>
                    <?php
                            }
                        } else {
                            echo "No records found.";
                        }

                        $result->free(); // Free the result set
                    } else {
                        echo "Query error: " . $mysqli->error;
                    }
                    ?>
                </table>
            </div>
        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>