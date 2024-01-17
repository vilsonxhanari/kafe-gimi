<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>

<body>
    <h2>User Registration</h2>

    <form action="register_process.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required>
        <br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <label for="role">Role:</label>
        <input type="text" name="role" required>
        <br><br>

        <input type="submit" value="Register">
    </form>
</body>

</html>