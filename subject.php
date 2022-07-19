<?php
include_once("D_file/d_config.php");
include_once("H_files/header.php");
include_once("F_files/f_script.php");

if(isset($_GET['id'])){
  $name = $_GET['id']; 
}else{
  $name = "Name not set in GET Method";
}

$ds_id = encryptor('d', base64_decode($name));

$sql = "SELECT * FROM `subject` WHERE ds_id = $ds_id";
$result = mysqli_query($conn, $sql);
?>
<!-- SELECT * FROM `subject` WHERE ds_id = 7 -->
  <!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="z-10 pb-8 bg-white sm:pb-16 md:pb-20  lg:pb-28 xl:pb-32">
      <!-- <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg> -->

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
      <h1 class=" my-6 mx-auto px-4 md:px-12 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white"> Subject List</h1>

      <div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
    <?php
     if ( mysqli_num_rows($result) > 0 ) {
      while($row = mysqli_fetch_assoc($result)) {
        $ENC_ID = base64_encode(encryptor('e', $row['id']));

        ?>
<div class="p-6 mt-3 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $row['subject_name']?></h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> Here you can find all the reading material unit wise  of the Blockchain Techonology, click on read more...</p>
    <a href="<?php echo "unit.php?id=" . $ENC_ID ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Read more
        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </a>
</div>

<?php
      
    }
   } else{
    echo "No records founds";
   }?>


    <div>
    </div>
</div>

     <!--  END : MAIN CONTENT -->
    </div>
  </div>
  
</div>
