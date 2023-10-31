<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Add Bootstrap 5.0.2 CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome CSS link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
    
    body{
        background-color: #d1e4dd;
    }


    .navbar-icon-top .navbar-nav>li>a>.fa,
    .navbar-icon-top .navbar-nav>li>a>.glyphicon {
        position: relative;
        width: 36px;
        font-size: 24px;
    }


    .navbar-icon-top .navbar-nav>li>a>.fa>.badge,
    .navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
        position: absolute;
        right: 0;
        font-family: sans-serif;
    }


    .navbar-icon-top .navbar-nav>li>a>.fa {
        top: 3px;
        line-height: 12px;
    }


    .navbar-icon-top .navbar-nav>li>a>.fa>.badge {
        top: -10px;
    }


    .navbar-icon-top .navbar-nav>li>a>.glyphicon {
        top: 6px;
        line-height: 6px;
    }


    .navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
        top: -16px;
    }


    @media (min-width: 768px) {
        .navbar-icon-top .navbar-brand {
            padding: 25px 15px;
        }


        .navbar-icon-top .navbar-text {
            margin-top: 25px;
            margin-bottom: 25px;
        }


        .navbar-icon-top .navbar-btn,
        .navbar-icon-top .navbar-form {
            margin-top: 18px;
            margin-bottom: 18px;
        }


        .navbar-icon-top .navbar-nav>li>a {
            text-align: center;
            display: table-cell;
            height: 70px;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }


        .navbar-icon-top .navbar-nav>li>a>.fa,
        .navbar-icon-top .navbar-nav>li>a>.glyphicon {
            display: block;
            width: 48px;
            margin: 2px auto 4px auto;
            top: 0;
            line-height: 24px;
        }


        .navbar-icon-top .navbar-nav>li>a>.fa>.badge,
        .navbar-icon-top .navbar-nav>li>a>.glyphicon>.badge {
            top: -7px;
        }
    }


    .search-form {
        width: 20%;
        margin-left: 8%;
    }


    .search-form input {
        height: 42px;
    }


    .btn-default {
        margin-top: 10px;
        width: 25%;
        height: 35px;
    }

    .search-field {
        height: 35px;
    }

    .hh {
        margin-left: 55%;
        text-decoration: none;
    }


    nav .container-fluid .navbar-right {
        margin-top: -50px;
    }


    .menu_nav {
        margin-right: 20px;
    }


    .hh .primary-navigation .primary-menu-container {
        justify-content: center;
        display: flex;
        padding-left: 100px;
    }

    .hh .primary-menu-container #primary-menu-list .menu-item a {
        font-size: 1.5rem;
    }

    .navbar .container-fluid .cc2 {
        padding-top: 1%;
        font-size: 2rem;
    }

    .navbar .container-fluid .cc {
        padding-top: 1%;
        font-size: 1.5rem;
    }

    .search-form {
        width: 20%;
        margin-left: 4%;
        position: absolute;
        padding-bottom: 0.5%;
    }

    .dropdown-menu {
        position: absolute !important;
        left: -58px !important;
    }

    @media (min-width: 768px) {
        .navbar-icon-top .navbar-nav>li>a {
            text-align: center;
            display: table-cell;
            height: 0px !important;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }
    }

    /* .primary-navigation .current-menu-item > a:first-child:hover, .primary-navigation .current_page_item > a:first-child:hover {
    text-decoration: unset !important;
    text-decoration-style: unset !important;
} */
    </style>
</head>

<body>
    <nav class="navbar navbar-icon-top navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand cc2" href="<?php site_url(); ?>">Group F</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active cc" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form style="position:absolute" role="search" method="get" class="search-form form"
                    action="http://localhost/ChuyenDeCMS/">
                    <img src="./wp-content/themes/twentytwentyone/assets/images/search.png" alt="" class="img-search">
                    <input type="search" id="search-form-1" class="search-field" value="" name="s"
                        placeholder="Search topics or keywords">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <div class="hh">
                    <?php get_template_part('template-parts/header/site-nav'); ?>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="menu_nav">
                        <a class="nav-link" href="#">
                            <i class="fa fa-ellipsis-h"></i>
                            Menu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/ChuyenDeCMS/?s=">
                            <i class="fa fa-search"></i>
                            Search
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-circle"></i> <!-- Sửa thành "fa-user-circle" -->
                            Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> <!-- Sửa "class" thành "class=" -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Add Bootstrap 5.0.2 JS script link here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
