<?php
include_once("../D_file/d_config.php");
include_once("../H_files/header.php");
include_once("../F_files/f_script.php");

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
              <a href="admindashboard.php">
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
              <a href="admindashboard.php" class="font-medium text-gray-500 hover:text-gray-900">Home</a>

              <!-- <a href="contact.php" class="font-medium text-gray-500 hover:text-gray-900">Contact us</a> -->

              <!-- <a href="about.php" class="font-medium text-gray-500 hover:text-gray-900">About</a> -->

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
include_once("../H_files/adminmobile.php");
?>
        </div>
      <!-- BEGIN : MAIN CONTENT -->
      <h1 class=" my-6 mx-auto px-4 md:px-12 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white"> Subject List</h1>
<!-- Modal toggle -->
<button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
    Add Subject
</button>
  <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
        Add Subject
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
       <form action="<?php echo "../php/insertsubject.php?id=" . $name ?>" METHOD="POST">
       <!-- <div class="mb-6">
            <label for="id"> id : </label>
            <input
              type="text"
              name="abc"
              disabled
              value=""
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              
            />
          </div> -->
       <div class="mb-6">
            <label for="subject">Subject : </label>
            <input
              type="text"
              name="subject"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="Enter Subject"
            />
          </div>
          <input
            type="submit"
            value="save"
            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
          />
       </form>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Close
        </button>
        
      </div>
    </div>
  </div>
</div>

<!-- model end -->
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
    <a href="<?php echo "adminunit.php?id=" . $ENC_ID ?>" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
