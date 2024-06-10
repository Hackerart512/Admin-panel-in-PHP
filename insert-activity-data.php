<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>

    <!-- add activities data into my sql -->
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "test");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 4 values from the form data(input)
		$City = $_REQUEST['City'];
		$Day = $_REQUEST['Day'];
		$Message = $_REQUEST['Message'];
		$File_name = $_REQUEST['File_name'];
	
		
		// Performing insert query execution
		// here our table name is college
		// $sql = "INSERT INTO add_activity VALUES ('$city',
		// 	'$day','$message','$file','1')";
		$sql = "INSERT INTO `add_activity`(`City`, `Day`,`message`, `File_name`, `Status`) VALUES ('$City','$Day','$Message','$File_name','1')";
		
		if(mysqli_query($conn, $sql)){
			// echo nl2br("\n$first_name\n $last_name\n "
			// 	. "$gender\n $address\n $email");
			echo"success";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
     <!-- add activities data into my sql -->

	<!-- add cities -->
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "test");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 2 values from the form data(input)
		$country = $_REQUEST['country'];
		$city = $_REQUEST['city'];
		
		
		// Performing insert query execution
		// here our table name is Add Cities
		// $sql = "INSERT INTO  cities VALUES ('$country', '$city')";
		$sql = "INSERT INTO `cities`(`country`, `city`) VALUES ('$country','$city')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$coutry\n $city");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
	<!-- add cities -->
</body>

</html>
