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
            <h2 class="main-title-w3layouts mb-2 text-center">Maps</h2>
            <!--// main-heading -->

            <!-- Carousel content -->
            <section class="carousels-section">
                <!-- Map1 -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Different Maps</h4>
                    <div class="w3_agile_map">
                        <div class="map-canvas"></div>
                        <div class="d-sm-flex justify-content-between map-buttons">
                            <button id="default-map-btn" class="w3ls_button bg-dark">default</button>
                            <button id="green-map-btn" class="w3ls_button bg-success">green</button>
                            <button id="blue-map-btn" class="w3ls_button bg-primary">blue with controls</button>
                            <button id="grey-map-btn" class="w3ls_button bg-secondary">grey</button>
                        </div>
                    </div>
                </div>
                <!--// Map1 -->
                <!-- Map2 -->
                <div class="container-fluid">
                    <div class="row">
                        <!-- Carousel-1 -->
                        <div class="outer-w3-agile col-xl mt-3 mr-xl-3 map-grids-w3l">
                            <iframe src="https://www.google.com/maps/embed?pb"></iframe>
                        </div>
                        <!--// Carousel-1 -->
                        <!-- Carousel-2 -->
                        <div class="outer-w3-agile col-xl mt-3 map-grids-w3l">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.2552063605694!2d115.85527671519536!3d-31.95397252965696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad5d00fb27f%3A0xa93cc014867a5f8b!2sPerth+Medical+Centre!5e0!3m2!1sen!2sin!4v1524306695551"></iframe>
                        </div>
                        <!--// Carousel-2 -->
                    </div>
                </div>
                <!--// Map2 -->

            </section>

            <!--// Carousel content -->

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

    <!-- map -->
    <script src="//maps.google.com/maps/api/js?sensor=false"></script>
    <!-- //map -->

    <!-- map -->
    <script src="js/prettymaps.js"></script>
    <script>
        $(function () {
            //default
            $('.map-canvas').prettyMaps({
                address: 'Melbourne, Australia',
                image: 'map-icon.png',
                hue: '#ffc600',
                saturation: -20
            });

            //red map example
            $('#default-map-btn').on('click', function () {
                $('.map-canvas').prettyMaps();
            });

            //green map example
            $('#green-map-btn').on('click', function () {
                $('.map-canvas').prettyMaps({
                    address: 'Melbourne, Australia',
                    image: 'map-icon.png',
                    hue: '#00FF55',
                    saturation: -30
                });
            });

            //blue map example
            $('#blue-map-btn').on('click', function () {
                $('.map-canvas').prettyMaps({
                    address: 'Melbourne, Australia',
                    image: 'map-icon.png',
                    hue: '#0073FF',
                    saturation: -30,
                    zoom: 16,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true,
                    scrollwheel: false,
                });
            });

            //grey map example
            $('#grey-map-btn').on('click', function () {
                $('.map-canvas').prettyMaps({
                    address: 'Melbourne, Australia',
                    image: 'map-icon.png',
                    saturation: -100,
                    lightness: 10
                });
            });
        });
    </script>
    <!-- //map -->

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