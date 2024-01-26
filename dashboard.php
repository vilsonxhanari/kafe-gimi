<?php
session_start();

if ((!isset($_SESSION['firstName']) || (!isset($_SESSION['lastName'])))) {
    header('Location: login.php');
    exit();
}

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

// Fetch user data from the database
$select_users = "SELECT id, firstName, lastName, email, role FROM users";
$users = mysqli_query($conn, $select_users);

// Fetch course data from the database
$select_courses = "SELECT id, name, duration FROM courses";
$courses = mysqli_query($conn, $select_courses);

// Fetch student data from the database
$select_students = "SELECT id, firstName, lastName, email, course_id, fee_paid, absences FROM students";
$students = mysqli_query($conn, $select_students);


if ((!$users) || (!$courses) || (!$students)) {
    die("Error: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to Dashboard, <?php echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName']; ?> 
       <a href="logout.php"> | Logout</a>
    </h2>

    <h3>All Users | <a href="add_user.php">Add New User</a></h3>
    <!-- Display user data in a table -->
    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($users)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a></td>
                    <!-- Add more columns if needed -->
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- *******************************courses************************************ -->

    <h3>All Courses | <a href="add_user.php">Add New Course</a></h3>
    <!-- Display Course data in a table -->
    <table border="1">
        <thead>
            <tr>
                <th>Course ID</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($courses)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['duration']; ?></td>
                    <td><a href="edit_course.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="delete_course.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

     <!-- *******************************students************************************ -->

     <h3>All Students | <a href="add_user.php">Add New Student</a></h3>
    <!-- Display Student data in a table -->
    <table border="1">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Fee paid</th>
                <th>Absences</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($students)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['course_id']; ?></td>
                    <td><?php echo ($row['fee_paid'] == 1) ? 'true': 'false'; ?></td>
                    <td><?php echo $row['absences']; ?></td>
                    <td><a href="edit_course.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a href="delete_course.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
