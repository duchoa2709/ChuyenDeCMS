<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>

    <div class="  w-full h-16 flex bg-[#f8f8f8]">
        <div class="container flex items-center m-auto justify-between md:px-2 px-4">

            <div class="flex items-center">
                <span class="text-lg font-medium">GROUP F</span>
                <div class="chalon md:block hidden">
                    <div class="cha flex ml-5  ">
                        <div class="box   ">
                            <a class="cursor-pointer hover:text-gray-900  px-4 py-8 bg-[#e7e7e7]" href="#">Home</a>
                        </div>
                        <div class="search  ml-5 ">
                            <form class="navbar-form navbar-left flex">
                                <div class="form-group">
                                    <input
                                        class="placeholder:italic  h-[32px]  block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                                        placeholder="Search" type="text" name="search" />
                                </div>
                                <button type="submit"
                                    class="btn h-[32px]  border-[1px] border-[#cccccc] ml-1 px-2 btn-default rounded-md">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

            <div class="md:flex hidden space-x-6 text-gray-600">


                <a class="cursor-pointer hover:text-gray-900 pt-[8px]" href="#">Features</a>
                <a class="cursor-pointer hover:text-gray-900 pt-[8px]" href="#">Templates</a>
                <a class="cursor-pointer hover:text-gray-900 pt-[8px]" href="#">Resources</a>
                <a class="cursor-pointer hover:text-gray-900 pt-[8px]" href="#">Pricing</a>
                <ul class="navbar-nav ms-auto space-x-4 flex ">
                    <li class="menu_nav">
                        <a class="nav-link text-center flex-col" href="#">
                            <i class="fas fa-ellipsis-h flex justify-center text-xl"></i>
                            <p class="text-xs">Menu</p>
                        </a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link nav-link text-center flex-col" href="http://localhost/wordpress_ver2/?s=">
                            <i class="fas fa-search flex justify-center text-xl"></i>

                            <p class="text-xs"> Search</p>
                        </a>
                    </li>
                    <li class="nav-item dropdown relative group">
                        <button
                            class="nav-link group-hover:bg-gray-200 group-hover:text-gray-800  text-center flex-col">
                            <i class="fas fa-user-circle text-xl"></i>

                            <p class="text-xs"> Account</p>
                        </button>
                        <ul
                            class="dropdown-menu hidden absolute p-2 -left-[74px] mt-2 space-y-1 bg-white border rounded-lg group-hover:block">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider border-t border-gray-200">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>




            <div class="md:hidden flex items-center space-x-4">
                <button class="menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>




</body>

</html>