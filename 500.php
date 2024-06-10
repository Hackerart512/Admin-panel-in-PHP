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
            <h2 class="main-title-w3layouts mb-2 text-center">500 Error Page</h2>
            <!--// main-heading -->

            <!-- Error Page Content -->
            <section class="error-page-content">

                <!-- Error Page Info -->
                <div class="outer-w3-agile mt-3">
                    <div class="container py-xl-5 py-4">
                        <div class="row">
                            <div class="errorleft d-xl-flex align-items-center col-xl-4">
                                <h4 class="error-title-agileits">500</h4>
                            </div>
                            <div class="error-right col-xl-8">
                                <span class="error-subtext-w3l">
                                    <i class="fas fa-exclamation-triangle text-warning mr-3"></i>Internal server error</span>
                                <p class="error-text">The server encountered something unexpected that didn't allow it to complete the request.
                                    We apologize.</p>
                                <p class="error-text text-dark m-0">You can go to
                                    <a href="index.php" role="button">home page</a> or search below
                                </p>
                            </div>
                        </div>
                        <form action="#" method="post" class="form-inline error-search-form w-xl-50 w-md-75 w-100 mx-auto mt-sm-5 mt-3">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" required="">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <!--// Error Page Info -->

            </section>
            <!--// Error Page Content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        <?php include "footer.php" ?>
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