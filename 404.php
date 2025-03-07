<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "link.php" ?>
</head>

<body>
    <div class="wrapper">
       <!-- Sidebar Holder -->
       <?php include "sidebar.php" ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <?php include "navbar.php" ?>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">404 Error Page</h2>
            <!--// main-heading -->

            <!-- Error Page Content -->
            <section class="error-page-content">

                <!-- Error Page Info -->
                <div class="outer-w3-agile mt-3">
                    <div class="container py-xl-5 py-4">
                        <div class="row justify-content-center">
                            <div class="errorleft d-xl-flex align-items-center col-xl-4">
                                <h4 class="error-title-agileits">404</h4>
                            </div>
                            <div class="error-right col-xl-8">
                                <span class="error-subtext-w3l">
                                    <i class="fas fa-exclamation-circle text-warning mr-3"></i>Oops you have encountered an error</span>
                                <p class="error-text"> It appears the page you are looking for doesn't exist. Sorry about that.</p>
                                <a class="btn btn-primary error-w3l-btn px-4" href="index.php" role="button">Go to home page</a>
                            </div>
                        </div>
                        <p class="error-text text-center mt-xl-5 mt-4">Would you like to try a search?</p>
                        <form action="#" method="post" class="form-inline error-search-form  w-xl-50 w-md-75 w-100 mx-auto">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" required="">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <!--// Error Page Info -->

            </section>

            <!--// Error Page Content -->

            <!-- Copyright -->
            <?php include "footer.php" ?>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>