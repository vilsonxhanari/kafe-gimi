<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atc";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

//inssert into users
$sql = "INSERT INTO users (firstName, lastName, email, password, role) VALUES ('$firstName',' $lastName', '$email', '$password', '$role');";

if (mysqli_query($conn, $sql)) {
    // echo "User created succesfully";

    // redirect to login page
    header('Location: login.php');
} else {
    echo "Error:" . $sql .  "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
