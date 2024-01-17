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
    <title>Coffe & Company</title>
    <style>
        .rounded-4xl {
            border-top-left-radius: 3.5rem;
            border-bottom-right-radius: 3.5rem;
        }

        .px-25 {
            padding-left: 5.313rem;
            /* 96px */
            padding-right: 5.313rem;
            /* 96px */
        }
    </style>
</head>

<body>


    <main class="bg-[url('img/coffe-gimi.jpg')] bg-cover">
        <nav class="lg:max-w-screen-2xl bg-black bg-opacity-50 p-1">

            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-1">

                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">

                    <span
                        class=" self-center text-2xl text-sm  text-white dark:text-white hover:underline">Reservations</span>

                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse max-x-screen-xl">
                
                    <a href="dashboard/plans.html" class="text-sm  text-white dark:text-white hover:underline">Login</a>
                </div>

            </div>

        </nav>
        <nav class="bg-red-700 bg-opacity-50">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between max-x-screen-2xl mx-auto p-4">
                <a href="default.html" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="img/kafe.png" class="h-10 rounded-br-2xl rounded-tl-2xl" alt="kafe" />
                    <span
                        class="lg:self-center text-white text-xl font-semibold whitespace-nowrap dark:text-white md:text-base">
                        Coffee Shop & Company</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4  rounded-lg  md:space-x-2 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="indexs.html"
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

                            <a href="contact.html"
                                class="inline-block py-2 px-3 hover:bg-black md:hover:bg-black text-white  rounded-br-2xl rounded-tl-2xl">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div id="indicators-carousel" class="relative w-100 h-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/carousel-1.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/coffe2.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/6.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/2.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/1.jpg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="bg-red-700">
            <h3 class="lg:p-4 text-2xl text-white text-center">
                Who We Are ?
            </h3>
        </div>
        <div class="lg:max-w-screen-2xl justify-center items-center lg:grid grid-cols-3 mx-auto justify-center mb-28">
            <div><img src="img/k-g1.png"
                    class="lg:px-5 py-5 mx-5 my-5 w-80 h-auto ring-white ring-1 rounded-4xl flex justify-center items-center"
                    alt=""><br><a
                    class="lg:justify-center my-5 mx-4 lg:px-20 py-5 items-center font-medium text-base ring-1 ring-red-100 text-red-100 rounded-br-2xl rounded-tl-2xl hover:bg-red-100 hover:text-red-700">Bar
                    - Kafe Gimi 1</a></div>
            <div><img src="img/k-g2.png"
                    class="lg:px-5 py-5 mx-5 my-5 w-80 h-auto ring-white ring-1 rounded-4xl flex justify-center items-center"
                    alt=""><br><a
                    class="lg:justify-center my-5 mx-5 lg:px-20 py-5 items-center font-medium text-base ring-1 ring-red-100 text-red-100 rounded-br-2xl rounded-tl-2xl hover:bg-red-100 hover:text-red-700">Kreperi
                    - Kafe Gimi 2</a></div>
            <div><img src="img/store.png"
                    class="lg:px-5 py-5 mx-5 my-5 w-80 h-auto ring-white ring-1 rounded-4xl flex justify-center items-center"
                    alt=""><br><a
                    class="lg:justify-center my-5 mx-4 lg:px-20 py-5 items-center font-medium text-base ring-1 ring-red-100 text-red-100 rounded-br-2xl rounded-tl-2xl hover:bg-red-100 hover:text-red-700">Store
                    - Kafe Gimi</a></div>
        </div>

        <div class="lg:grid gap-4 grid-cols-2 mx-4 my-4 px-4 py-8 text-center">
            <div class="bg-red-700 px-4 py-4 text-white rounded-br-2xl rounded-tl-2xl">
                | Be a Member of KafeGimi: <a href="k-vip.html"
                    class="px-2 py-2 bg-black text-white rounded-br-xl  text-2xl rounded-tl-xl hover:bg-white hover:text-black">Here
                    ! </a></p>
            </div>
            <div class="bg-red-100 text-black px-4 py-4 text-center rounded-br-2xl rounded-tl-2xl">
                | Already a Member ? Login: <a href="k-vip.html"
                    class="px-2 py-2 bg-black text-white text-2xl rounded-br-xl rounded-tl-xl hover:bg-white hover:text-black">Here
                    ! </a></p>
            </div>
        </div>

    </main>
    <footer class="bg-[url('img/coffe-gimi.jpg')]">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="img/kafe.jpg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Coffee Shop &
                        Company</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-white sm:text-center ">© 2024 <a href="https://flowbite.com/"
                    class="hover:underline">Coffee Shop & Company™</a>. All Rights Reserved.</span>
            </a>
            <div class="flex md:order-2">
    </footer>
</body>

</html>