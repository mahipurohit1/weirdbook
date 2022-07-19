<?php
include_once("D_file/d_config.php");
include_once("H_files/header.php");
include_once("F_files/f_script.php")
?>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div>
        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="index.php">
                  <span class="sr-only">WierdBook</span>
                  <img alt="Workflow" class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                  <button type="button" id="open" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
              <a href="index.php" class="font-medium text-gray-500 hover:text-gray-900">Home</a>

              <a href="contact.php" class="font-medium text-gray-500 hover:text-gray-900">Contact us</a>

              <a href="about.php" class="font-medium text-gray-500 hover:text-gray-900">About</a>

              <!-- <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a>

              <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Log in</a> -->
            </div>
          </nav>
        </div>

        <!--
          Mobile menu, show/hide based on menu open state.

          Entering: "duration-150 ease-out"
            From: "opacity-0 scale-95"
            To: "opacity-100 scale-100"
          Leaving: "duration-100 ease-in"
            From: "opacity-100 scale-100"
            To: "opacity-0 scale-95"
        -->
        <?php
        include_once("H_files/mobile.php");
        ?>
      </div>
      <!-- BEGIN : MAIN CONTENT -->
      <!-- <div class="rounded-3xl overflow-hidden shadow-xl  my-3 bg-blue-500 ">
        <img src="https://i.imgur.com/dYcYQ7E.png" />
        <div class="flex justify-center -mt-8">
          <img src="https://cdn.pixabay.com/photo/2018/05/02/00/49/man-3367459__340.png" class="rounded-full border-solid border-white border-2 -mt-3" hight=100px !important>
        </div>
        <div class="text-center px-3 pb-6 pt-2">
          <h3 class="text-white text-sm bold font-sans">WeirdBook</h3>
          <p class="mt-2 font-sans font-light text-white">Hello, I am WeirdBook ....</p>
        </div>
        <div class="flex justify-center pb-3 text-white">
          <div class="text-center mr-3 border-r pr-3">
            <h2>10</h2>
            <span>Photos</span>
          </div>
          <div class="text-center">
            <h2>1k</h2>
            <span>Friends</span>
          </div>
        </div>
      </div> -->
      

      <!--  END : MAIN CONTENT -->
    </div>
    <div class="rounded-3xl overflow-hidden shadow-xl  my-3 bg-blue-500 ">
        <img src="https://i.imgur.com/dYcYQ7E.png" width="100%" style ="height: 35vh  !important" />
        <div class="flex justify-center -mt-8">
          <img src="https://cdn.pixabay.com/photo/2018/05/02/00/49/man-3367459__340.png" class="rounded-full border-solid border-white border-2 -mt-3">
        </div>
        <div class="text-center px-3 pb-6 pt-2">
          <h3 class="text-white text-sm bold font-sans">WeirdBook</h3>
          <p class="mt-2 font-sans font-light text-white">Hello, I am WeirdBook and Special Thanks to Kanchan Tiwari !!</p>
        </div>
        <div class="flex justify-center pb-3 text-white">
          <div class="text-center mr-3 border-r pr-3">
            <h2>10</h2>
            <span>Photos</span>
          </div>
          <div class="text-center">
            <h2>1k</h2>
            <span>Friends</span>
          </div>
        </div>
      </div>
  </div>
  <!-- BEGIN : IMAGES -->


  <!-- END : IMAGES -->
</div>