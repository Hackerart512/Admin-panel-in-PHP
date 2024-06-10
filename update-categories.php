<?php
// check session
session_start();
if(!isset($_SESSION['username']) || $_SESSION['loggedin'] != true){
    header("location:login.php");
}
// check session

include("./database.php");

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} else {
    if (!isset($_GET['Id']) || empty($_GET['Id'])) {
        // echo "Invalid request: ID is missing.";
        // exit();
    }

    $brandId = $_GET['Id'];

    // Fetch the current data of the brand
    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
        exit();
    } else {
        $selectQuery = "SELECT * FROM `categories`  WHERE `Id`= '$brandId' ;";
        $result = mysqli_query($conn, $selectQuery);
        if (mysqli_num_rows($result) > 0) {
        } else {
            $msg = "No Record found";
        }
    }

    $brand = $result->fetch_assoc();
    $Name = $brand['Name'];
    $Status = $brand['Status'];
    $dst = $brand['Image'];
    $Description = $brand['Description'];
    
    $typ = "";
    $siz = "";
    $src = "";

    if (isset($_POST['submit-btn'])) {
        $Name = $_POST['name'];
        $Status = $_POST['status'];

        // Image upload
        if (isset($_FILES["image"])) {
            $typ = $_FILES["image"]["type"];
            $siz = $_FILES["image"]["size"];
            $src = $_FILES["image"]["tmp_name"];
            $dst = $_FILES["image"]["name"];

            if ($typ == 'image/jpeg' || $typ == 'image/png' || $typ == 'image/jpeg') {
                if (move_uploaded_file($src, "images/$dst")) {
                    // echo "<script>alert('Upload Successfully')</script>";
                } else {
                    echo "<script>alert('Uploading Error')</script>";
                }
            }
        }

        // Performing update query execution using prepared statements
        $sql = "UPDATE categories SET `Name` = '$Name', `Description`='$Description', `Image` = '$dst', `Status` = '$Status' WHERE `Id` = '$brandId'";
        if ($conn->query($sql) === TRUE) {
            // echo "Record updated successfully";
            header("location:view-categories.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    mysqli_close($conn);
}
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
                 <div class="tab-content">

                     <form  action="update-categories.php?Id=<?php echo $brandId; ?>" method="POST" class="form-vertical"  enctype="multipart/form-data">
                         <!-- Email input -->
                         <h2 class="form-div my-3 " style="text-align: center">Update Categories</h2>  
                         <div class="firstRow d-flex row">
                             <label class="form-label" for="exampleDayInput">Name</label>
                             <input name="name" type="text" className="form-control" placeholder="Add Name" id="exampleDayInput" value="<?php echo"$Name"; ?>">
                         </div>

                         <div class="firstRow d-flex row">
                             <label class="form-label" for="exampleDayInput">Description</label>
                             <input name="description" type="text" className="form-control" placeholder="Add Description" id="exampleDayInput" value="<?php echo"$Description"; ?>">
                         </div>

                         <div class="forthRow row">
                            <label for="formFileMultiple" class="form-label">UPLOAD Image</label>
                            <input name="image" class="form-control" type="file" id="formFileMultiple" multiple />
                        </div>

                         <!-- Submit button -->
                         <button name="submit-btn" type="submit" class="btn btn-primary btn-block mb-3">Add Category</button>
                     </form>
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
         $(window).load(function() {
             // Animate loader off screen
             $(".se-pre-con").fadeOut("slow");;
         });
     </script>
     <!--// loading-gif Js -->

     <!-- Sidebar-nav Js -->
     <script>
         $(document).ready(function() {
             $('#sidebarCollapse').on('click', function() {
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
         $(function() {
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
         $(function() {
             $('.calender').pignoseCalender({
                 select: function(date, obj) {
                     obj.calender.parent().next().show().text('You selected ' +
                         (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                         '.');
                 }
             });

             $('.multi-select-calender').pignoseCalender({
                 multiple: true,
                 select: function(date, obj) {
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

         AmCharts.ready(function() {
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
         $(document).ready(function() {
             $(".dropdown").hover(
                 function() {
                     $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                     $(this).toggleClass('open');
                 },
                 function() {
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