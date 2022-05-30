<?php
session_start();
if (!isset($_SESSION['email']))
    header('location:login.php');

$bdd = new PDO('mysql:host=localhost; dbname=airHotel; charset=UTF8', 'root', '');
$display_hotels = $bdd->prepare("SELECT * FROM hotel");
$query = $bdd->prepare($display_hotels);
$display_hotels->execute();

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
</head>
<body>

<nav class="bg-white px-2 px-6 py-2.5 rounded bg-transparent flex flex-col">
    <div class="flex flex-col lg:justify-start justify-between">
        <div class="flex justify-between">
            <div class="flex">
                <a href="index.php" class="flex items-center">
                    <img src="../assets/logo.png" class="mr-3 lg:h-16 h-20" alt="AirHotel Logo">
                </a>

                <div class="hidden items-center ml-6 lg:flex lg:w-auto" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 bg-blue-700 rounded lg:bg-transparent lg:p-0 text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3  lg:p-0">Hotels</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3  lg:p-0">Flights</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="items-center space-x-6 lg:flex hidden">


                <div class="">
                    <div class="flex items-center md:order-2">
                        <button type="button" class="flex mr-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="../assets/profile.svg" alt="user photo">
                        </button>

                        <div class="hidden z-50 my-4 text-base list-none bg-[#1D1D1D] rounded divide-y divide-[#F14747] shadow " id="dropdown" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1015px, 1022px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                            <div class="py-3 px-4">
                                <span class="block text-sm font-medium text-white truncate">Username</span>
                                <span class="block text-sm mt-2 font-medium text-slate-100 truncate">Email</span>
                            </div>
                            <ul class="py-1 !border-[#8b5cf6]" aria-labelledby="dropdown">
                                <li>
                                    <a href="#" class="block py-2 px-4 text-sm">Profil</a>
                                </li>
                                <li>
                                    <a href="admin.php" class="block py-2 px-4 text-sm">Admin</a>
                                </li>
                                <li>
                                    <a href="../controller/disconnect.php" class="block py-2 px-4 text-sm">Disconnect</a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </div>




            </div>

            <div class="lg:hidden block items-center">
                <div class="menu_overlay flex flex-col">


                    <i class="fas fa-times"></i>







                    <ul class="list flex flex-col">

                        <a href="#" class="hover:!border-0 hover:transition-none">
                            <img src="../assets/profileImage.png" class="w-20 rounded-full mb-2" alt="">
                        </a>

                        <span class="block  text-white">Email</span>
                        <a href="../controller/disconnect.php" class="!text-[#8b5cf6] mt-2 !text-sm">Disconnect</a>

                        <div class="flex flex-col space-y-6 mt-8 ">
                            <li><a href="#">Home</a></li>
                            <li>
                                <a href="admin.php">Admin</a>
                            </li>
                            <li><a href="/src/view/#nouveautes">Hotels</a></li>
                            <li><a href="/src/view/#films-populaires">Flights</a></li>
                        </div>


                    </ul>
                </div>
                <div class="landing_page">
                    <div class="menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>






</nav>


    <div class="container lg:mx-auto mt-12 mx-6">

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-3 flex text-center">
                <?php
                foreach ($display_hotels as $am) {
                ?>
                <div class="flex w-full">
                    <?php
                    $base64 = 'data:image.jpg ;base64,' . base64_encode($am['hotelImage']);

                    ?>

                        <div class="w-2/5 flex lg:mr-3 mr-8 h-full !bg-cover !bg-center" style='background-image: url("<?php echo $base64?>")'> </div>









                    <div class="flex flex-col lg:justify-start lg:p-8 text-left w-3/5">
                        <div class="flex items-center mb-4">
                            <div class="flex lg:flex-row flex-col lg:items-center">
                                <h2 class="text-xl mr-4">
                                    <?php echo $am['name']?>
                                </h2>
                                <div class="flex">
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                    <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                                </div>
                            </div>

                        </div>
                        <span>
                            <?php echo $am['location']?>
                        </span>
                        <p>
                            <?php echo $am['room_number']?> room(s)
                        </p>

                        <span class="mt-3 font-bold">
                            € <?php echo $am['price']?>
                        </span>
                        <button class="mt-8 bg-[#0071c2] w-fit rounded-[3px] py-1 px-6 hover:bg-[#0066af]">Book</button>
                    </div>

                </div>
                    <?php
                }
                ?>

            </div>


    </div>

</body>
<script src="../index.js"></script>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>
