<?php

if (!isset($app)) {
    die();
}

/**
 * ### Navigation
 * 
 * Die Navigation besteht aus mehreren Teilen: 
 * 
 * 1. Navbar 
 * 1.1 Logo -> Das Logo des Systems
 * 1.2 Page Title -> Seitentitel aus der Page Variable
 * 1.3 Actions -> Actions
 * 
 * 2. Breadcrumbs -> Navigation aus der Page Variable
 * 
 * 3. Sidebar
 * 3.1 User -> Leiste für den eingeloggten Benutzer
 * 3.2 Default Navigation -> Bringt eine Standard Funktion für ein ArrayToNav mit
 * 3.3 Version
 * 
 */
?>

<!-- 1. Navbar -->
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid justify-content-start align-items-center">


        <!-- 1.1 Logo -->
        <div id="navbar-banner" class="navbar-brand" style="min-width: 258px;">
            <div class="d-flex align-items-center">
                <div class="navbar-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;" width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <defs>
                            <path id="path" d="M50 15A15 35 0 0 1 50 85A15 35 0 0 1 50 15" fill="none"></path>
                            <path id="patha" d="M0 0A15 35 0 0 1 0 70A15 35 0 0 1 0 0" fill="none"></path>
                        </defs>
                        <g transform="rotate(0 50 50)">
                            <use xlink:href="#path" stroke="#fff" stroke-width="3"></use>
                        </g>
                        <g transform="rotate(60 50 50)">
                            <use xlink:href="#path" stroke="#fff" stroke-width="3"></use>
                        </g>
                        <g transform="rotate(120 50 50)">
                            <use xlink:href="#path" stroke="#fff" stroke-width="3"></use>
                        </g>
                        <g transform="rotate(0 50 50)">
                            <circle cx="50" cy="15" r="9" fill="#7ab929">
                                <animateMotion dur="6s" repeatCount="indefinite" begin="0s">
                                    <mpath xlink:href="#patha"></mpath>
                                </animateMotion>
                            </circle>
                        </g>
                        <g transform="rotate(60 50 50)">
                            <circle cx="50" cy="15" r="9" fill="#7ab929">
                                <animateMotion dur="6s" repeatCount="indefinite" begin="-1s">
                                    <mpath xlink:href="#patha"></mpath>
                                </animateMotion>
                            </circle>
                        </g>
                        <g transform="rotate(120 50 50)">
                            <circle cx="50" cy="15" r="9" fill="#7ab929">
                                <animateMotion dur="6s" repeatCount="indefinite" begin="-2s">
                                    <mpath xlink:href="#patha"></mpath>
                                </animateMotion>
                            </circle>
                        </g>
                    </svg>
                </div>

                <div>
                    <a href="index.php"><strong>ERP-SYSTEM</strong></a>
                </div>
            </div>
        </div>

        <!-- 1.2 Title -->
        <?php require('includes/01_nav_title.php'); ?>


        <!-- 1.3 Actions-->
        <div class="navbar-action-container d-flex btn-group">


        </div>


    </div>
</nav>

<!--  2. Breadcrumbs -->
<?php require('includes/03_nav_breadcrumbs.php'); ?>

<!-- 3. Sidebar -->
<aside class="sidebar text-white">

    <div class="sidebar-inner d-flex flex-column">

        <!-- 3.1 User Login -->
        <?php require('includes/04_nav_user_login.php'); ?>

        <ul class="list-unstyled nav-autoclose">

            <!-- 3.2 Default Navigation -->
            <?php

            // Default
            $_navigation = [
                'Dashboard' => ['index', 'Dashboard', 'fa-solid fa-puzzle-piece'],
            ];

            require('includes/05_nav_default_nav.php');


            ?>

        </ul>

        <!-- 3.3 Version -->
        <?php require('includes/06_nav_version.php'); ?>

        <div class="sidebar-toggler">
            <a href="javascript:void(0);">
                <i class="fa-solid fa-chevron-left"></i>
            </a>
        </div>

    </div>

</aside>