<?php require("db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>

<body>
    <?php
    $viewAllData = "SELECT * FROM students";
    $res = $conn->query($viewAllData);
    ?>
    <h2>PHP Mysqli CRUD | View</h2>
    <?php
    if (isset($_GET['successmsg'])) {
        echo $_GET['successmsg'];
    }
    ?>
    <table border="1px solid">
        <thead>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php
            if ($res->num_rows > 0) {
                while ($data = $res->fetch_assoc()) {

            ?>
                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['fname'] ?></td>
                        <td><?php echo $data['lname'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><a href="update.php?id=<?php echo $data['id'] ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $data['id'] ?>">Delete</a></td>
                    </tr>
            <?php
                }
            } ?>
        </tbody>
    </table>
</body>

</html>