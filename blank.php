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
            <h2 class="main-title-w3layouts mb-2 text-center">Blank page</h2>
            <!--// main-heading -->

            <!-- Error Page Content -->
            <div class="blank-page-content">

                <!-- Error Page Info -->
                <div class="outer-w3-agile mt-3">
                    <p class="paragraph-agileits-w3layouts">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mollis augue venenatis, laoreet magna
                        sed, bibendum ligula. Cras eget ultricies leo. Aenean elementum semper commodo. Sed quis vehicula
                        sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat massa at dolor
                        faucibus, vitae molestie lorem cursus. Integer vulputate pretium urna, at mattis nibh convallis sed.
                        Mauris suscipit dictum nulla, vel suscipit urna volutpat eu. Nunc interdum a sapien et sodales. Donec
                        et turpis quis eros convallis finibus in non sem. Suspendisse semper dui quis pellentesque porta.
                        Sed sodales risus sit amet libero vestibulum congue. Integer pulvinar nunc at dui ultrices, vel ultrices
                        nunc scelerisque. Nam facilisis ipsum sed hendrerit aliquet.</p>
                </div>
                <!--// Error Page Info -->

            </div>

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