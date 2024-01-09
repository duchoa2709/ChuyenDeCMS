<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
        </a>

        <div class="  w-full h-16 flex bg-[#f8f8f8]">
            <div class="container h-16 flex items-center  m-auto justify-between ">

                <div class="flex ">
                    <span class="text-lg font-medium">GROUP F1</span>
                    <div class="chalon md:block hidden">
                        <div class="cha flex ml-5 ">
                            <div class="box   ">
                                <a class="cursor-pointer hover:text-gray-900  h-16 px-3 pb-[29px] pt-[17px]   bg-[#e7e7e7]"
                                    href="http://localhost/ChuyenDeCMS/">Home</a>
                            </div>
                            <div class="search  ml-5 ">
                                <form role="search" method="get" class="search-form"
                                    action="<?php echo esc_url(home_url('/')); ?>">
                                    <div class="relative">
                                        <input type="text" class="w-60 h-9 p-2 rounded-xl border border-gray-300 "
                                            name="s" id="search" placeholder="Search..."
                                            value="<?php the_search_query(); ?>" />
                                        <button type="submit" class="absolute  px-3 h-9 rounded-md">
                                            submit
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="nav  md:block hidden  ">
                    <?php get_template_part( 'template-parts/header/site-nav' ); ?>
                </div>

                <div class="md:flex text-gray-600 md:block hidden ">


                    <ul class="navbar-navaa   space-x-4 contents ">
                        <li class="menu_nav">
                            <a class="nav-link text-center flex-col" href="#">
                                <i class="fas fa-ellipsis-h flex justify-center text-xl"></i>
                                <p class="text-xs">Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link nav-link text-center flex-col" href="http://localhost/ChuyenDeCMS/?s=">
                                <i class="fas fa-search flex justify-center text-xl"></i>

                                <p class="text-xs"> Search</p>
                            </a>
                        </li>
                        <li class="item relative group">
                            <a class="   text-center flex-col">
                                <i class="fas fa-user-circle text-xl flex justify-center text-xl"></i>

                                <p class="text-xs"> Account</p>
                            </a>

                            <ul
                                class="dropdown-menu hidden absolute p-2  right-0 top-[20px] mt-2 space-y-1 bg-white border rounded-lg group-hover:block">
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



    </div>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">

            <main id="main" class="site-main">