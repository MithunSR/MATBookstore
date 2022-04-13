<!--Student name:U.G.A.U.Rajapaksha Student ID:PS/2017/160-->
<html>
	<head>
	<title>DataBase</title>
	</head>
	<body>
	<!--DataBase for Bookstore-->
	<?php
	//Create connection
			$servername="localhost";
			$username="root";
			$password="";
			$conn=mysqli_connect($servername,$username,$password);
		
		//check connection
			if(!$conn)
			{
				die("Connection failed:".mysqli_connect_error());
			}
			echo "Connected successfully</br>";
			
		//Create database
			$sql="CREATE DATABASE MAT";
			if(mysqli_query($conn,$sql))
			{
				echo "Database created succesfully";
			}
			else
			{
				echo "Error creating database:".mysqli_connect_error($conn);
			}*/
			
			$dbname="MAT";
			
		//Create connection
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn)
			{
				die("Connection failed:".mysqli_connect_error());
			}
			else
			{
			echo "Connected successfully";
			}

			
		//Sql to create Customer table
			$sql="CREATE TABLE Customer
			(Customer_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			Name varchar(50),
			dateofbirth date,
			email varchar(50),
			Customer_Address varchar(150),
			Cutomer_ContactNumber int(10),
			Password varchar(15) NOT NULL)ENGINE='innodb'";
			if(mysqli_query($conn,$sql))
			{
				echo "Table Customer created successfully</br>";
			}
			else
			{
				echo "Error creating table:".mysqli_connect_error($conn);
			}
			
			//Sql to create inquery table
			$sql="CREATE TABLE inquery
			(Name varchar,
			Email varchar(50),
			Subject varchar(50),
			Message varchar(500) )ENGINE='innodb'";
			if(mysqli_query($conn,$sql))
			{
				echo "Table Orders created successfully</br>";
			}
			else
			{
				echo "Error creating table:".mysqli_connect_error($conn);
			}
			

			?>
		<!--end of db-->

	</body>
</html>