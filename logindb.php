<!--Student name:U.G.A.U.Rajapaksha Student ID:PS/2017/160-->
<html>
	<head>
	<title>user</title>
	</head>
	<body>
	<!--DataBase for login Form-->

		<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="MAT";
		$conn=mysqli_connect($servername,$username,$password,$dbname)or die("Connection Failed.");
		
		//check connection
			if(!$conn)
			{
				die("Connection failed:".mysqli_connect_error());
			}
			//echo "Connected successfully";
			
		//Check user name & passwords are correct or not		
		$myusername = $_POST['user'];
		$mypassword = $_POST['pass'];
		
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		
		$q=mysqli_query($conn,"SELECT * FROM customer WHERE Name='".$myusername."' and Password='".$mypassword."'") or die(mysql_error());
		$result=mysqli_fetch_row($q);
		
		if($result)
		{
			header('location:home.php');
		}
		else
		{
			echo '<script>alert("Your username or password invalid.")</script>'; 
   
		}
		
		
		mysql_close();
		
		?>
		<!--End of login-->
	</body>
</html>