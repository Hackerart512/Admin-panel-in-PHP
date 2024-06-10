
<?php


include("./database.php");
  
// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
 

if (isset($_POST['submit-btn'])) {

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
     
   

    //Check username is exists or not !
    $exitSql = "SELECT * FROM `user` WHERE `Email` = '$Email'";
    $result = mysqli_query($conn, $exitSql);
    $numExitRows = mysqli_num_rows($result);
    
    if($numExitRows > 0){
        $showError = "usrname Already Exists";
        echo "<script>alert('ERROR: Username already Exists')</script>";
    }
    else{

        

            // password hashing (Encrypted password..)
            $hash = password_hash($Password, PASSWORD_DEFAULT);

            // Performing insert query execution
            $sql = "INSERT INTO `user`(`Name`, `Email`,`Password`) VALUES ('$Name', '$Email', '$hash')";
            if (mysqli_query($conn, $sql)) {
                echo "<br>. Your Query : $sql.<br>";
                $login = true;
                session_start();
                $_SESSION['username'] = $Email;
                $_SESSION['loggedin'] = true;
    
                header("location:index.php"); 
            } else {
                echo "<script>alert('ERROR: Hush! Sorry')</script>";
            }
        
    }


} else {
}

// Close connection
mysqli_close($conn);
 
?>


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
    <div class="bg-page">
        <div class="container1">
            <!-- code pastes hwew -->

            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="./images/draw2.webp"
                                class="img-fluid" alt="Sample image">
                        </div>
                        <div class="mt-3 col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                            <form method="POST" action="register.php">
                                <div
                                    class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                    <p class="lead fw-normal mb-0 me-3">Sign Up with</p>
                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button  type="button" class="btn btn-primary btn-floating mx-1">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                </div>

                                <div class="divider d-flex align-items-center my-4">
                                    <p class="text-center fw-bold mx-3 mb-0">Or</p>
                                </div>

                                 <!-- Email input -->
                                 <div class="form-outline mb-4">
                                    <input name="name" type="text" id="form3Example3" class="form-control form-control-lg"SS
                                        placeholder="Enter Your Name" />
                                    <label class="form-label" for="form3Example3">Full Name</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input name="email" type="email" id="form3Example3" class="form-control form-control-lg"SS
                                        placeholder="Enter a valid email address" />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-3">
                                    <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
                                        placeholder="Enter password" />
                                    <label class="form-label" for="form3Example4">Password</label>
                                </div>

                                

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">
                                        <input style="height:15px"class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3" />
                                        <label  class="form-check-label" for="form2Example3">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="forgot.php" class="text-body">Forgot password?</a>
                                </div>

                                <div class="text-center text-lg-start mt-4 pt-2">
                                    <button name="submit-btn" type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign Up</button>
                                    <p class="small fw-bold mt-2 pt-1 mb-0">You have already account? <a href="login.php"
                                            class="link-danger">Login</a></p>
                                </div>

                            </form>
                            <h1 class="paragraph-agileits-w3layouts mt-2">
        <a href="index.php">Back to Home</a>
    </h1>
                        </div>
                    </div>
                </div>
                
            </section>

            <!-- Copyright -->
            <?php include "footer.php" ?>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>