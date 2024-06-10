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
            <h2 class="main-title-w3layouts mb-2 text-center">Grids</h2>
            <!--// main-heading -->

            <!-- Grids Content -->
            <section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Grid Options</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">
                                    Extra small
                                    <br>
                                    <small>&lt;576px</small>
                                </th>
                                <th class="text-center">
                                    Small
                                    <br>
                                    <small>≥576px</small>
                                </th>
                                <th class="text-center">
                                    Medium
                                    <br>
                                    <small>≥768px</small>
                                </th>
                                <th class="text-center">
                                    Large
                                    <br>
                                    <small>≥992px</small>
                                </th>
                                <th class="text-center">
                                    Extra large
                                    <br>
                                    <small>≥1200px</small>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-nowrap" scope="row">Max container width</th>
                                <td>None (auto)</td>
                                <td>540px</td>
                                <td>720px</td>
                                <td>960px</td>
                                <td>1140px</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Class prefix</th>
                                <td>
                                    <code>.col-</code>
                                </td>
                                <td>
                                    <code>.col-sm-</code>
                                </td>
                                <td>
                                    <code>.col-md-</code>
                                </td>
                                <td>
                                    <code>.col-lg-</code>
                                </td>
                                <td>
                                    <code>.col-xl-</code>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row"># of columns</th>
                                <td colspan="5">12</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Gutter width</th>
                                <td colspan="5">30px (15px on each side of a column)</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Nestable</th>
                                <td colspan="5">Yes</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Column ordering</th>
                                <td colspan="5">Yes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--// Grids Info -->
                <!-- grid classes -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Basic Grids</h4>
                    <div class="container bd-example-row">
                        <div class="row">
                            <div class="col">
                                1 of 2
                            </div>
                            <div class="col">
                                2 of 2
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                1 of 3
                            </div>
                            <div class="col">
                                2 of 3
                            </div>
                            <div class="col">
                                3 of 3
                            </div>
                        </div>
                        <h4 class="tittle-w3-agileits mb-4 mt-5">Grid Responsive Classes</h4>
                        <div class="bd-example">
                            <div class="row">
                                <div class="col">col</div>
                                <div class="col">col</div>
                                <div class="col">col</div>
                                <div class="col">col</div>
                            </div>
                            <div class="row">
                                <div class="col-8">col-8</div>
                                <div class="col-4">col-4</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// grid classes -->




                <!-- Horizontal Grid Alignment -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Horizontal Grid Alignment</h4>
                    <div class="container bd-example-row">
                        <div class="row justify-content-start">
                            <div class="col-4">
                                One of two columns
                            </div>
                            <div class="col-4">
                                One of two columns
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                One of two columns
                            </div>
                            <div class="col-4">
                                One of two columns
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-4">
                                One of two columns
                            </div>
                            <div class="col-4">
                                One of two columns
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-4">
                                One of two columns
                            </div>
                            <div class="col-4">
                                One of two columns
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-4">
                                One of two columns
                            </div>
                            <div class="col-4">
                                One of two columns
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Horizontal Grid Alignment -->


                <!-- Vertical Grid Alignment -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Vertical Grid Alignment</h4>
                    <div class="bd-example-row bd-example-row-flex-cols">

                        <div class="bd-example">
                            <div class="container">
                                <div class="row align-items-start">
                                    <div class="col">
                                        One of three columns
                                    </div>
                                    <div class="col">
                                        One of three columns
                                    </div>
                                    <div class="col">
                                        One of three columns
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col">
                                        One of three columns
                                    </div>
                                    <div class="col">
                                        One of three columns
                                    </div>
                                    <div class="col">
                                        One of three columns
                                    </div>
                                </div>
                                <div class="row align-items-end">
                                    <div class="col">
                                        One of three columns
                                    </div>
                                    <div class="col">
                                        One of three columns
                                    </div>
                                    <div class="col">
                                        One of three columns
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--// Vertical Grid Alignment -->
                <!-- Ordered Grid Alignment -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Ordered Grid Classes</h4>
                    <div class="container bd-example-row">
                        <div class="row">
                            <div class="col">
                                First, but unordered
                            </div>
                            <div class="col order-12">
                                Second, but last
                            </div>
                            <div class="col order-1">
                                Third, but first
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col order-last">
                                First, but last
                            </div>
                            <div class="col">
                                Second, but unordered
                            </div>
                            <div class="col order-first">
                                Third, but first
                            </div>
                        </div>
                    </div>
                </div>

                <!--// Ordered Grid Alignment -->

                <!-- Grid Offset classes -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Grid Offset Classes</h4>
                    <div class="container bd-example-row">
                        <div class="row">
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                            <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
                        </div>
                    </div>
                </div>

                <!--// Grid Offset classes -->

                <!-- Nesting Grids -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Nesting Grids</h4>
                    <div class="container bd-example-row">

                        <div class="bd-example">
                            <div class="row">
                                <div class="col-sm-9">
                                    Level 1: .col-sm-9
                                    <div class="row">
                                        <div class="col-8 col-sm-6">
                                            Level 2: .col-8 .col-sm-6
                                        </div>
                                        <div class="col-4 col-sm-6">
                                            Level 2: .col-4 .col-sm-6
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--// Nesting Grids -->

            </section>

            <!--// Grids Content -->

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