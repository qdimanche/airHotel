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
                                <span class="block text-sm mt-2 font-medium text-slate-100 truncate"><?php echo($_SESSION['email']) ?></span>
                            </div>
                            <ul class="py-1 !border-[#8b5cf6]" aria-labelledby="dropdown">
                                <li>
                                    <a href="#" class="block py-2 px-4 text-sm">Profil</a>
                                </li>
                                <li>
                                    <a href="addHotel.php" class="block py-2 px-4 text-sm">Admin</a>
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

                        <span class="block  text-white"><?php echo($_SESSION['email']) ?></span>
                        <a href="../controller/disconnect.php" class="!text-[#8b5cf6] mt-2 !text-sm">Disconnect</a>

                        <div class="flex flex-col space-y-6 mt-8 ">
                            <li><a href="#">Home</a></li>
                            <li>
                                <a href="addHotel.php">Admin</a>
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