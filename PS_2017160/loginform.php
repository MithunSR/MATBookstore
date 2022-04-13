<!--Student Name:U.G.A.U.Rajapaksha 	Student ID:PS/2017/160-->
<!DOCTYPE html>
	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {font-family: Arial, Helvetica, sans-serif;}
	form {border: 3px solid #f1f1f1;}

	input[type=text], input[type=password] {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border-radius:15px;
	  border: 1px solid #ccc;
	  box-sizing: border-box;
	}

	button {
	  background-color: #04AA6D;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 15px;
	  border: none;
	  cursor: pointer;
	  width: 45%;
	  border-radius:20px;
	}

	button:hover {
	  opacity: 0.8;
	}

	.cancelbtn {
	  width: auto;
	  padding: 10px 18px;
	  background-color: #f44336;
	  border-radius:20px;
	}

	.imgcontainer {
	  text-align: center;
	  margin: 15px 0 12px 0;
	}

	img.avatar {
	  width: 10%;
	  border-radius: 50%;
	}

	.container {
	  padding: 16px 350px;
	}

	span.psw {
	  float: right;
	  padding-top: 16px;
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
	  span.psw {
		 display: block;
		 float: none;
	  }
	  .cancelbtn {
		 width: 100%;
	  }
	}
	h2
	{
		text-align:center;
		font-size:25px;
	}
	</style>
	<script>
		/*reset form function*/
			function Formreset()
			{
				document.getElementById("myform").reset();
			}
		
			
	</script>
	</head>
	<body>

	<h2>Login</h2>

	<form action="logindb.php" method="post" id="myform" ">
	  <div class="imgcontainer">
		<img src="login.jpg" alt="Avatar" class="avatar">
	  </div>

		  <div class="container">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="user" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="pass" required>
			
		<button type="submit">Login</button><a href="createaccount.php"><button type="button">Create Account</button></a>
		
		<label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn" onclick="Formreset()">Cancel</button>
		<!--<span class="psw">Forgot <a href="forgetpassword.php">password?</a></span>-->
	  </div>
	</form>

	</body>
	</html>
