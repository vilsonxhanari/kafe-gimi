<?php include('header.php');?>
       

        <h1 class="mt-6 mx-2 mb-5 text-4xl text-dark font-medium tracking-tight text-white sm:text-center bg-clip-text">

            Shtepia e Kafe Gimi

        </h1>

        <div class=" px-5 text-gray-950">



            <p class=" p-4 mb-3 text-white  text-center">A tradition that connects..</p>



        </div>

        <div class="lg:grid grid-cols-2">

<div class="bg-red-700">

    test

</div>

</main>

<div class="bg-black">

    <section class="bg-white dark:bg-gray-900">

        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">

            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>

            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>

            <form action="#" class="space-y-8">

                <div>

                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>

                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>

                </div>

                <div>

                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>

                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>

                </div>

                <div class="sm:col-span-2">

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>

                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>

                </div>

                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>

            </form>

        </div>

      </section>

</div>

        </div>



        



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

                                  <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-black dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>

                              </div>

                              <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>

                          </div>

                          <a href="#" class="text-sm text-black hover:underline dark:text-black">Lost Password?</a>

                      </div>

                      <button type="submit" class="w-full text-white bg-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-black font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-black dark:focus:ring-black">Login to your account</button>

                      <div class="text-sm font-medium text-gray-500 dark:text-gray-300">

                          Not registered? <a href="#" class="text-black hover:underline dark:text-black">Create account</a>

                      </div>

                  </form>

              </div>

          </div>

      </div>

  </div> 

  
  <?php include('footer.php');?>