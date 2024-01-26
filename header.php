

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="js.js"></script>
    <title>Homepage -Coffe and Company</title>
</head>

<body>


  <main class="bg-[url('img/coffe-gimi.jpg')] bg-cover">
    <nav class="bg-black bg-opacity-50 p-1">
      <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-1">
          <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
              <span class=" self-center text-2xl text-sm  text-white dark:text-white hover:underline">Reservations</span>
          </a>
          <div class="flex items-center space-x-6 rtl:space-x-reverse max-x-screen-xl">
                
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"  class="text-sm  text-white dark:text-white hover:underline">Login</button>
        </div>
		
      </div>
  </nav>
    <nav class="bg-red-700 bg-opacity-50">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="default.html" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="img/kafe.png" class="h-10 rounded-br-2xl rounded-tl-2xl"   alt="kafe" />
          <span class="lg:self-center text-white text-xl font-semibold whitespace-nowrap dark:text-white md:text-base"> Coffee Shop & Company</span>
      </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul
      class="flex flex-col font-medium p-4 md:p-0 mt-4  rounded-lg  md:space-x-2 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
          <a href="index.php"
          <a href="index.php"
          class="inline-block py-2 px-3 lg:bg-black text-white bg-black rounded md:bg-black  md:text-white md:dark:text-white rounded-br-2xl rounded-tl-2xl aria-current="
          page">Home
          </a>
      </li>
      <li>
          <a href="inout.php"
              class="inline-block py-2 px-3 hover:bg-black md:hover:bg-black text-white  rounded-br-2xl rounded-tl-2xl">In
              & Out</a>
      </li>
      <li>
          <a href="menu.php"
              class="inline-block py-2 px-3 hover:bg-black md:hover:bg-black text-white  rounded-br-2xl rounded-tl-2xl">Menu</a>
      </li>
      <li>

          <a href="contact.php"
          class="inline-block py-2 px-3 hover:bg-black md:hover:bg-black text-white  rounded-br-2xl rounded-tl-2xl">Contact Us</a>
      </li>
  </ul>
    </div>
  </div>
</nav>



<!-- Modal toggle -->

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Sign in to our platform
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="login_process.php" method="post">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>

                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="register.php" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 

