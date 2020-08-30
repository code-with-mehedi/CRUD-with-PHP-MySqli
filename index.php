<?php require("db.php");

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lasttName = $_POST['lastName'];
    $userMail = $_POST['email'];
    $insertQuery = "INSERT INTO students ( fname,lname, email ) VALUES ( '$firstName', '$lasttName', '$userMail' )";
    if ($conn->query($insertQuery) == true) {
        header('Location: view.php');
    } else {
        echo "Error $conn->error";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD With PHP Mysqli</title>
</head>

<body>
    <h2>Insert Data</h2>
    <form action="" method="post">
        <p><input type="text" name="firstName" placeholder="Enter First Name" required></p>
        <p><input type="text" name="lastName" placeholder="Enter Last Name" required></p>
        <p><input type="email" name="email" placeholder="Enter Password" required></p>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>

</html>