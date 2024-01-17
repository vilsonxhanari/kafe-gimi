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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="js.js"></script>
    <title>K-Vip</title>
</head>

<body>


    <nav class="fixed top-0 z-50 w-full bg-red-700 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
              <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-white rounded-br-2xl rounded-tl-2xl sm:hidden hover:bg-white hover:text-black focus:outline-none">
                  <span class="sr-only">Open sidebar</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                  </svg>
               </button>
              <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                <a href="default.html" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="img/kafe.png" class="h-10 rounded-br-2xl rounded-tl-2xl"   alt="kafe" />
                    <span class="lg:self-center text-white text-xl font-semibold whitespace-nowrap dark:text-white md:text-base"> Dashboard</span>
              </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                  <div>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                      <span class="sr-only">Open user menu</span>
                      <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-white" id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                      <p class="text-sm text-gray-900 dark:text-white" role="none">
                         <?php echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName']; ?> 
                      </p>
                      <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        neil.sims@flowbite.com
                      </p>
                    </div>
                    <ul class="py-1" role="none">
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                      </li>
                      <li>
                        <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </nav>
      
      <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
         <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                     <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"/>
                      </svg>
                          <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Status Active</span>
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                          </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                           <li>
                             <a href="personal.html" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"> <p>Personal</p></a>
                          </li>
                          <li>
						  
                             <a href="familly.html" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Family</a>
                          </li>
                         
						  <li class="bg-red-900">
                             <a href="company.html" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group dark:text-white dark:hover:bg-gray-700">Company</a>
                          </li>
                    </ul>
                 </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">Upgrade Status</span>
                     <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                     <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                  </a>
               </li>
               <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                        <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                        <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                  </a>
               </li>
            </ul>
         </div>
      </aside>
      
      <div class="lg:p-4 sm:ml-64  bg-red-500">
         <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <!---Product hot--->

            <div class="lg:md:grid grid-cols-3 mb-4 ">
               <div class="flex justify-center items-center">

                  <div class="max-w-screen-2xl max-w-100 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                      <a href="#">
                          <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                      </a>
                      <div class="p-5">
                          <a href="#">
                              <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Hot Drinks <span>10% discount</span></p>
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">45 Lek</span>Turkish Coffe</h5>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">63 Lek</span>Express Coffe</h5>
                                 <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">63 Lek</span>Machiatto</h5>
                                 <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                 <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">90 Lek</span>American  Coffe</h5>
                              </a>

                      </div>
                  </div>
                  </div>
               <!---Product hot--->
               <div class="flex justify-center items-center">

                  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                      <a href="#">
                          <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                      </a>
                      <div class="p-5">
                            <a href="#">
                                 <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Cold Drinks <span>10% discount</span></p>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">126 Lek</span>Affogato</h5>
                                  <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                     <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">135 Lek</span>Freddo Espresso</h5>
                                   <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                     <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">135 Lek</span>Freddo  Cappuccino</h5>
                                   <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                     <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">135 Lek</span>Frappe Coffee</h5>
                                </a>
                      </div>
                  </div>
                  </div>
               
                  <div class="flex justify-center items-center">

                     <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                         <a href="#">
                             <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                         </a>
                         <div class="p-5">
                          <a href="#">
                               <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Cold Drinks <span>10% discount</span></p>
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">126 Lek</span>Affogato</h5>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                 <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">135 Lek</span>Freddo Espresso</h5>
                                 <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                   <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">135 Lek</span>Freddo  Cappuccino</h5>
                                 <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                           <span class="bg-red-900 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">135 Lek</span>Frappe Coffee</h5>
                              </a>
                         </div>
                     </div>
                     </div>
            </div>
 
         </div>
         <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <!---Product hot--->
            <div class="lg:md:grid grid-cols-3 mb-4 ">
               <div class="flex justify-center items-center">

                  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                      <a href="#">
                          <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                      </a>
                      <div class="p-5">
                        <a href="#">
                          <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Hot Drinks <span>10% discount</span></p>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                              <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">120 Lek</span> Decaffeinate</h5>
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                 <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Cappuccino</h5>
                               <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                 <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Coffee Latte</h5>
                               <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                 <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">140 Lek</span> Nescafe</h5>
                            </a>
                      </div>
                  </div>
                  </div>
               <!---Product hot--->
               <div class="flex justify-center items-center">

                  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                      <a href="#">
                          <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                      </a>
                      <div class="p-5">
                        <a href="#">
                          <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Cold Drinks <span> 10% discount</span></p>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                              <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">120 Lek</span> Decaffeinate</h5>
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Cappuccino</h5>
                               <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Coffee Latte</h5>
                               <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">140 Lek</span> Nescafe</h5>
                            </a>
                      </div>
                  </div>
                  </div>
               
                  <div class="flex justify-center items-center">

                     <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                         <a href="#">
                             <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                         </a>
                         <div class="p-5">
                          <a href="#">
                            <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Crepperi <span> 10% discount</span></p>
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">120 Lek</span> Decaffeinate</h5>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Cappuccino</h5>
                                 <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Coffee Latte</h5>
                                 <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">140 Lek</span> Nescafe</h5>
                              </a>
                        </div>
                     </div>
                     </div>
            </div>
            <!---Product hot--->



         </div>
         <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <!---Product hot--->

           <div class="lg:md:grid grid-cols-3 mb-4 ">
               <div class="flex justify-center items-center">

                  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                      <a href="#">
                          <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                      </a>
                      <div class="p-5">
                        <a href="#">
                          <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Hot Drinks <span>10% discount</p>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                              <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">120 Lek</span> Decaffeinate</h5>
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Cappuccino</h5>
                               <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Coffee Latte</h5>
                               <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">140 Lek</span> Nescafe</h5>
                            </a>

                      </div>
                  </div>
                  </div>
               <!---Product hot--->
               <div class="flex justify-center items-center">

                  <div class="lg:max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                      <a href="#">
                          <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                      </a>
                      <div class="p-5">
                        <a href="#">
                          <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Cold Drinks <span>10% discount</p>
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                              <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">120 Lek</span> Decaffeinate</h5>
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Cappuccino</h5>
                               <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Coffee Latte</h5>
                               <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">140 Lek</span> Nescafe</h5>
                            </a>
                      </div>
                  </div>
                  </div>
               
                  <div class="flex justify-center items-center">

                     <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                         <a href="#">
                             <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
                         </a>
                         <div class="p-5">
                          <a href="#">
                            <p class="lg:rounded-br-2xl rounded-tl-2xl bg-red-700 text-white px-2 py-3">Crepperi <span>10% discount</p>
                              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">120 Lek</span> Decaffeinate</h5>
                                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Cappuccino</h5>
                                 <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">150 Lek</span> Coffee Latte</h5>
                                 <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                  <span class="bg-red-700 text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-white">140 Lek</span> Nescafe</h5>
                              </a>
                        </div>
                     </div>
                     </div>
                     
            </div>

         </div>
      </div>    
</body>

</html>
<?php
// Close the database connection
mysqli_close($conn);
?>

