<!--Student Name:U.G.A.U.Rajapaksha 	Student ID:PS/2017/160-->
<?php
	$username = "root";
	$password = "";
	$servername = "localhost";
	
	$dbname="mat";
	$conn=mysqli_connect($servername,$username,$password,$dbname)or die("Connection Failed.");
		
		//check connection
			if(!$conn)
			{
				die("Connection failed:".mysqli_connect_error());
			}
			else{
		if(isset($_POST['user']) && isset($_POST['password'])&& isset($_POST['rpassword'])&& isset($_POST['dob'])&& isset($_POST['email'])&& isset($_POST['address'])&& isset($_POST['contact'])){
			$user = $_POST['user'];
			$pass = $_POST['password'];
			$dob = $_POST['dob'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];

			$query = mysqli_query($conn,"SELECT * FROM customer WHERE Name='$user'");
			if(mysqli_num_rows($query) > 0 ) { //check if there is already an entry for that username
				echo '<script>alert("Username already exists!")</script>';
			}else{
				mysqli_query($conn,"INSERT INTO customer (Name,dateofbirth,email,Customer_Address,Cutomer_ContactNumber,Password) VALUES ('$user','$dob','$email','$address','$contact','$pass')");
				header("location:loginform.php");
			}
	}
			}
	$mysqli_close();
?>