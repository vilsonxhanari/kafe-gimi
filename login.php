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

    <main class="bg-[url('img/coffe-gimi.jpg')] bg-cover">
        <nav class="lg:max-w-screen-2xl bg-black bg-opacity-50 p-1">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-1">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class=" self-center text-xl text-sm  text-white dark:text-white hover:underline">Reservations</span>
                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse max-x-screen-xl">
                
                    <a href="dashboard/plans.html" class="text-sm  text-white dark:text-white hover:underline">Login</a>
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
                            <a href="index.html"
                                class="inline-block py-2 px-3 hover:bg-black md:hover:bg-black text-white  rounded-br-2xl rounded-tl-2xl">Home
                            </a>
                        </li>
                        <li>
                            <a href="inout.html"
                                class="inline-block py-2 px-3 hover:bg-black md:hover:bg-black text-white  rounded-br-2xl rounded-tl-2xl">In
                                & Out</a>
                        </li>
                        <li>
                            <a href="menu.html"
                                class="inline-block py-2 px-3 hover:bg-black md:hover:bg-black text-white  rounded-br-2xl rounded-tl-2xl">Menu</a>
                        </li>
                        <li>

                            <a href="index.html"
                                class="inline-block py-2 px-3 lg:bg-black text-white bg-black rounded md:bg-black  md:text-white md:dark:text-white rounded-br-2xl rounded-tl-2xl aria-current="
                                page">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="login_process.php" method="post">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-red-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
</main>
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Adapted according to the wishes of the clients</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">being a regular customer is always rewarded</p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-red-100 rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Personal</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Price reductions and bonuses. Unique prices according to the Personal plan.</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$29</span>
                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                </div>

                <!-- List -->
                  <div class="flex justify-center items-center">

    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <p class="lg:rounded-br-2xl rounded-tl-2xl bg-black text-white px-2 py-3">Hot Drinks</p>
                <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                    <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">50 Lek</span>Turkish Coffe</h5>
                  <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                    <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">70 Lek</span>Espresso</h5>
                    <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                      <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">80 Lek</span>Machiato</h5>
                </a>
          <a href="#" class="inline-flex items-start px-3 py-2 text-sm font-medium text-start text-white bg-black rounded-tl-2xl rounded-br-2xl hover:bg-text-slate-800 focus:ring-4 focus:outline-none focus:ring-text-slate-300 dark:bg-text-slate-600 dark:hover:bg-text-slate-700 dark:focus:ring-text-slate-800">
                Read more
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    </div>
                <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
            </div>
            
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-red-100 rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Familly</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    Relevant for multiple users, extended & premium support</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$59</span>
                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                </div>

                <!-- List -->
                  <div class="flex justify-center items-center">

    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <p class="lg:rounded-br-2xl rounded-tl-2xl bg-black text-white px-2 py-3">Hot Drinks</p>
                <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                    <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">50 Lek</span>Turkish Coffe</h5>
                  <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                    <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">70 Lek</span>Espresso</h5>
                    <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                      <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">80 Lek</span>Machiato</h5>
                </a>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-text-slate-700 rounded-lg hover:bg-text-slate-800 focus:ring-4 focus:outline-none focus:ring-text-slate-300 dark:bg-text-slate-600 dark:hover:bg-text-slate-700 dark:focus:ring-text-slate-800">
                Read more
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    </div>
                <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
            </div>
            <!-- Pricing Card -->
            <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-red-100 rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                <h3 class="mb-4 text-2xl font-semibold">Familly</h3>
                <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    Relevant for multiple users, extended & premium support</p>
                <div class="flex justify-center items-baseline my-8">
                    <span class="mr-2 text-5xl font-extrabold">$129</span>
                    <span class="text-gray-500 dark:text-gray-400">/month</span>
                </div>

                <!-- List -->
                  <div class="flex justify-center items-center">

    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="img/coffe2.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <p class="lg:rounded-br-2xl rounded-tl-2xl bg-black text-white px-2 py-3">Hot Drinks</p>
                <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                    <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">50 Lek</span>Turkish Coffe</h5>
                  <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                    <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">70 Lek</span>Espresso</h5>
                    <h5 class="mb-2 text-2xl text-start font-bold tracking-tight text-gray-900 dark:text-white">
                      <span class="bg-slate-950 text-start text-white text-sm font-medium me-2 px-2.5 py-0.5 rounded text-dark">80 Lek</span>Machiato</h5>
                </a>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-text-slate-700 rounded-lg hover:bg-text-slate-800 focus:ring-4 focus:outline-none focus:ring-text-slate-300 dark:bg-text-slate-600 dark:hover:bg-text-slate-700 dark:focus:ring-text-slate-800">
                Read more
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    </div>
                <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
            </div>
        </div>
    </div>
  </section>

        

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
                  <form class="space-y-4" action="#">
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                      </div>
                      <div class="flex justify-between">
                          <div class="flex items-start">
                              <div class="flex items-center h-5">
                                  <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-black dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-text-slate-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                              </div>
                              <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                          </div>
                          <a href="#" class="text-sm text-black hover:underline dark:text-black">Lost Password?</a>
                      </div>
                      <button type="submit" class="w-full text-white bg-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-text-slate-600 dark:hover:bg-black dark:focus:ring-black">Login to your account</button>
                      <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                          Not registered? <a href="#" class="text-black hover:underline dark:text-black">Create account</a>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div> 
  
</body>

</html>s
