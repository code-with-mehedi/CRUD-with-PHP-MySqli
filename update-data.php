<?php require("db.php");
$id = $_GET['uid'];
if (isset($_POST['submit'])) {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];

    $updateData = "UPDATE students 
SET fname='$fname',lname='$lname',email='$email'
WHERE id= $id";
    $update = $conn->query($updateData);
    if ($update == true) {
        header('Location: view.php?successmsg=data updated successfully');
    } else {
        echo "data updated failed $conn->error";
    }
}
