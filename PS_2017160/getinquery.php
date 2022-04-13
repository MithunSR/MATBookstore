<!DOCTYPE html>
<html>
	<head>
	<title>Inquery</title>
	</head>
	<body>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="mat";
			
			//Check the conection
			$conn=mysqli_connect($servername,$username,$password,$dbname);
			if(!$conn)
			{
				die("Connection failed:".mysqli_connect_error());
			}
			
						
			//Performing insert query execution
			$sql="INSERT INTO inquery(Name,Email,Subject,Message) VALUES('$_POST[Fname]','$_POST[email]','$_POST[subject]','$_POST[message]')";
			if (!mysqli_query($conn, $sql)) 
			{
				echo "Error: " . $sql . ":-" . mysqli_error($conn);
			 } else 
			 {
				//echo '<script>alert("New record has been added successfully !")</script>';
				//direct to home page
				header('location:Home.php');
			 }
			 mysqli_close($conn);


			
		?>
	</body>
	</html>	