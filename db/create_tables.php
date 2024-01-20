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

$sql_create_table_users = "CREATE TABLE users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql_create_table_users)) {
    echo "<br> Table users created succesfully";
} else {
    echo "<br> Error creating table users: <br>" . mysqli_error($conn);
}

$sql_create_table_product_categories = "CREATE TABLE categories(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql_create_table_product_categories)) {
    echo "<br> Table categories created succesfully";
} else {
    echo "<br> Error creating table categories: <br>" . mysqli_error($conn);
}

$sql_create_table_clients = "CREATE TABLE clients(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    course_id INT NOT NULL,
    fee_paid BOOLEAN NOT NULL, 
    absences INT,
    FOREIGN KEY (course_id) REFERENCES categories(id)
    )";

if (mysqli_query($conn, $sql_create_table_clients)) {
    echo "<br> Table clients created successfully";
} else {
    echo "<br> Error creating table clients: <br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>