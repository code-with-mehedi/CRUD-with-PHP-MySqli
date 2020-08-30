<?php require("db.php");
$id = $_GET['id'];
$deleteData = "DELETE FROM students WHERE id=$id";
$executeQuery = $conn->query($deleteData);
if ($executeQuery == true) {
    header('Location: view.php?successmsg=Data Deleted successfully');
} else {
    echo " Data Deletion failed $conn->error";
}
