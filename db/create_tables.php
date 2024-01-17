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

$sql_create_table_product_courses = "CREATE TABLE courses(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    duration VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql_create_table_product_courses)) {
    echo "<br> Table courses created succesfully";
} else {
    echo "<br> Error creating table courses: <br>" . mysqli_error($conn);
}

$sql_create_table_students = "CREATE TABLE students(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    course_id INT NOT NULL,
    fee_paid BOOLEAN NOT NULL, 
    absences INT,
    FOREIGN KEY (course_id) REFERENCES courses(id)
    )";

if (mysqli_query($conn, $sql_create_table_students)) {
    echo "<br> Table students created successfully";
} else {
    echo "<br> Error creating table students: <br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>