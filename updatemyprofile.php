
<?php

// check session
session_start();
if(!isset($_SESSION['username']) || $_SESSION['loggedin'] != true){
    header("location:login.php");
}
// check session

include("./database.php");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// // fetch myprofile data into mysql
// $selectQuery = "SELECT * FROM `myprofile`;";
// $result = mysqli_query($conn,$selectQuery);
// if(mysqli_num_rows($result) > 0){
// }else{
//     $msg = "No Record found";
// }
// // fetch myprofile data into mysql

$Name="";
$Email = "";
$Contact ="";
$Address="";
$City = "";
$State = "";
$Gender="";
$Country = "";




if (isset($_POST['submit-btn'])) {

    
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Contact =$_POST['contact'];
    $Address=$_POST['address'];
    $City=$_POST['city'];
    $State = $_POST['state'];
    $Gender=$_POST['gender'];
    $Country =$_POST['country'];
    
    // update record in myprofile table
    $sql = "UPDATE myprofile SET `name`='$Name', `email`='$Email', `contact`='$Contact', `city`='$City',`address`='$Address',`state`='$State', `gender`='$Gender', `country`='$Country' WHERE id=2";
    // update record in myprofile table
  
    // Performing insert query execution
    // $sql = "INSERT INTO `myprofile`(`name`, `email`, `contact`,`address`,`city`,`state`, `gender`,`country`,`status`) VALUES ('$Name','$Email','$Contact',' $Address','$City','$State','$Gender', '$Country','1')";

    if (mysqli_query($conn, $sql)) {
        echo "<br>. Your Query : $sql.<br>"; 
        // echo "<script>alert('Successfully save your activities')</script>";
        header("location:index.php"); 
    } else {
        echo "<script>alert('ERROR: Hush! Sorry')</script>";

    }


    

} else {
}

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "link.php" ?>
</head>

<body>
    <!-- <div class="se-pre-con"></div> -->

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include "sidebar.php" ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <?php include "navbar.php" ?>
            <!--// top-bar -->

            <!-- add activities  -->
            <div class="addActivitiesContainer">


                <!-- Pills content -->
                <div class="profile-content">
                   
                       <!-- update profile code -->
                       <div class="col-lg-6 ProfilecardUpdate">
                            <h4>Change personal information</h4>
                            <form action="updatemyprofile.php" method="POST" enctype="multipart/form-data">

                                <div class="firstRow">
                                    <div class="my-3 FirstRowDiv1">
                                        <label htmlFor="exampleInputname">NAME</label>
                                        <input placeholder='Full Name' class="ContactInput" id="exampleInputname" type="text" name="name" />
                                    </div>
                                    <div class='my-3 firstRowdiv2'>
                                        <label htmlFor='exampleInputEmail'>EMAIL</label>
                                        <input placeholder='Your Email'class="ContactInput" id="exampleInputEmail" type="text" name="email" />
                                    </div>
                                </div>

                                <div class="secondRow">
                                    <div class="my-3 secondRowdiv1">
                                        <label htmlFor="exampleInputPhoneNumber">PHONE NUMBER</label>
                                        <input placeholder='Mobile' class="ContactInput" id="exampleInputPhoneNumber" type="text" name="contact" />
                                    </div>
                                    <div class='my-3secondRowdiv2'>
                                        <label htmlFor='exampleInputAddress'>STREET ADDRESS</label>
                                        <input placeholder='Address' class="ContactInput" id="exampleInputAddress" type="text" name="address" />
                                    </div>
                                </div>

                                <div class="thirdRow">
                                    <div class="my-3 thirdRowdiv1">
                                        <label htmlFor="exampleInputCity">City</label>
                                        <input placeholder='City Name' class="ContactInput" id="exampleInputCity" type="text" name="city" />
                                    </div>
                                    <div class='my-3thirdRowdiv2'>
                                        <label htmlFor='exampleInputState'>State</label>
                                        <input placeholder='State' class="ContactInput" id="exampleInputState" type="text" name="state" />
                                    </div>
                                </div>

                                <div class="fourthRow">
                                    <div class="my-3 fourthRowdiv1">
                                        <label htmlFor="exampleInputGender">Gender</label>
                                        <input placeholder='Male/Female' class="ContactInput" id="exampleInputGender" type="text" name="gender" />
                                    </div>
                                    <div class='my-3 fourthRowdiv2'>
                                        <label htmlFor='exampleInputLname'>Contry</label>
                                        <input placeholder='Contry' class="ContactInput" id="exampleInputLname" type="text" name="country" />
                                    </div>
                                </div>

                                <button type="submit" name="submit-btn" class="my-3 btn btn-primary">Save Changes</button>
                            </form>

                            <form>
                                <div class="my-3 secondRow-direction-column">
                                    <div class="secondRowdiv1">
                                        <label htmlFor="exampleInputPassword">PASSWORD</label>
                                        <input  placeholder="Old Password"class="ContactInput" id="exampleInputPassword" type="Password" name="password" />
                                    </div>
                                    <div class='my-3 secondRowdiv2'>
                                        <label htmlFor='exampleInputRPassword'>NEW PASSWORD REAPEAT</label>
                                        <input placeholder="New Password" class="ContactInput" id="exampleInputRPassword" type="password" name="rpassword" />
                                    </div>
                                </div>
                                <button type="button" class="my-3 btn btn-primary">Save Password</button>
                            </form>
                        </div>
                           <!-- update profile code -->
                </div>
                <!-- Pills content -->
            </div>
            <!-- add activities  -->

            <!-- Copyright -->
            <?php include "footer.php" ?>
            <!--// Copyright -->
        </div>
    </div>    

     <!-- Required common Js -->
     <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="js/SimpleChart.js"></script>
    <script>
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [{
                X: "6",
                Y: 300.00
            },
            {
                X: "7",
                Y: 101.98
            },
            {
                X: "8",
                Y: 140.00
            },
            {
                X: "9",
                Y: 340.00
            },
            {
                X: "10",
                Y: 470.25
            },
            {
                X: "11",
                Y: 180.56
            },
            {
                X: "12",
                Y: 680.57
            },
            {
                X: "13",
                Y: 740.00
            },
            {
                X: "14",
                Y: 800.89
            },
            {
                X: "15",
                Y: 420.57
            },
            {
                X: "16",
                Y: 980.24
            },
            {
                X: "17",
                Y: 1080.00
            },
            {
                X: "18",
                Y: 140.24
            },
            {
                X: "19",
                Y: 140.58
            },
            {
                X: "20",
                Y: 110.54
            },
            {
                X: "21",
                Y: 480.00
            },
            {
                X: "22",
                Y: 580.00
            },
            {
                X: "23",
                Y: 340.89
            },
            {
                X: "0",
                Y: 100.26
            },
            {
                X: "1",
                Y: 1480.89
            },
            {
                X: "2",
                Y: 1380.87
            },
            {
                X: "3",
                Y: 1640.00
            },
            {
                X: "4",
                Y: 1700.00
            }
            ]
        };
        $(function () {
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });
    </script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="js/rumcaJS.js"></script>
    <script src="js/example.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="js/moment.min.js"></script>
    <script src="js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    <!-- Count-down -->
    <script src="js/simplyCountdown.js"></script>
    <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='js/amcharts.js'></script>
    <script>
        var chart;
        var legend;

        var chartData = [{
            country: "Lithuania",
            value: 260
        },
        {
            country: "Ireland",
            value: 201
        },
        {
            country: "Germany",
            value: 65
        },
        {
            country: "Australia",
            value: 39
        },
        {
            country: "UK",
            value: 19
        },
        {
            country: "Latvia",
            value: 10
        }
        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 20;
            chart.angle = 30;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

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