<?php include('header.php');?>

    <h2 class="text-center text-white p-2">User Registration</h2>


  <div class="grid grid-cols-2 gap-2">
<img src="img/01.jpg">
	 <form action="register_process.php" method="post" class="bg-white p-4">
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required /
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required /
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required /
        <br><br>

        <label for="role">Role:</label>
        <input type="text" name="role" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required /
        <br><br>

        <input type="submit" value="Register">
    </form>
	</div>


  <?php include('footer.php');?>
