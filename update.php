<?php require("db.php");
$id = $_GET['id'];
$updateData = "SELECT * FROM students WHERE id= $id";
$update = $conn->query($updateData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD With PHP Mysqli</title>
</head>

<body>
    <h2>Update Data</h2>
    <form action="update-data.php?uid=<?php echo $id; ?>" method="post">
        <?php
        if ($update->num_rows > 0) {
            while ($res = $update->fetch_assoc()) {
        ?>
                <p><input type="text" name="firstName" value="<?php echo $res['fname'] ?>" placeholder="Enter First Name" required></p>
                <p><input type="text" name="lastName" value="<?php echo $res['lname'] ?>" placeholder="Enter Last Name" required></p>
                <p><input type="email" name="email" value="<?php echo $res['email'] ?>" placeholder="Enter Password" required></p>
                <input type="submit" name="submit" value="SUBMIT">
        <?php }
        }
        ?>
    </form>
</body>

</html>