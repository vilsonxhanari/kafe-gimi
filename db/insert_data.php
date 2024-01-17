<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// create an user for admin
$password = password_hash('admin', PASSWORD_DEFAULT); // hash password
$sql = "INSERT INTO users (firstName, lastName, email, password, role) VALUES ('Admin','Admin' ,'admin@atc.al', '$password', 'admin');";

// insert data for courses
$sql .= "INSERT INTO courses (name, duration) VALUES ('Web Designer', 'One Year');";
$sql .= "INSERT INTO courses (name, duration) VALUES ('Graphic Designer', 'One Year');";
$sql .= "INSERT INTO courses (name, duration) VALUES ('Business Manager', 'Three month');";

// insert into students
$sql .= "INSERT INTO students (firstName, lastName, email, course_id, fee_paid, absences) VALUES ('Ana','Hoxha' ,'ana@atc_student.al', '1', '1', '8');";
$sql .= "INSERT INTO students (firstName, lastName, email, course_id, fee_paid, absences) VALUES ('John','Smith' ,'john@atc_student.al', '3', '1', '5');";
$sql .= "INSERT INTO students (firstName, lastName, email, course_id, fee_paid, absences) VALUES ('Laura','Callahan' ,'laura@atc_student.al', '2', '1', '1');";
$sql .= "INSERT INTO students (firstName, lastName, email, course_id, fee_paid, absences) VALUES ('Loren','Dodsworth' ,'loren@atc_student.al', '1', '0', '4');";
$sql .= "INSERT INTO students (firstName, lastName, email, course_id, fee_paid, absences) VALUES ('Tom','King' ,'tom@atc_student.al', '2', '1', '15');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>