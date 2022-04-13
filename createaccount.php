<!--Student Name:U.G.A.U.Rajapaksha 	Student ID:PS/2017/160-->
<!DOCTYPE html>
	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {font-family: Arial, Helvetica, sans-serif;}
	form {border: 3px solid #f1f1f1;}

	input[type=text], input[type=password], input[type=email], input[type=number], input[type=date] {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0px;
	  display: inline-block;
	  border-radius:15px;
	  border: 1px solid #ccc;
	  box-sizing: border-box;
	}

	button {
	  background-color: #04AA6D;
	  color: white;
	  padding: 14px 20px;
	  margin: 10px 60px;
	  border: none;
	  cursor: pointer;
	  width: 80%;
	  border-radius:20px;
	}

	button:hover {
	  opacity: 0.8;
	}

	.cancelbtn {
	  width: auto;
	  padding: 10px 30px;
	  margin:0px 102px;
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
		text-size:25px;
	}
	</style>
	<script>
			/*reset form function*/
			function Formreset()
			{
				document.getElementById("myform").reset();
			}
			
			
				/*validate mobile*/
				function validateMobile()
				{
					let m=document.forms["myform"]["contact"].value;
					var mobileformat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
					if(m !=="")
					{
						if(m.match(mobileformat))
						{
							
							return true;
						}
						else
						{
							alert("You have entered an invalid mobile number!");
							document.myform.contact.focus();
							return false;
						}
						
					}
				}
				

				  
				  /*Username validation*/
				  function Validateuser()
				  {
					  let d=document.forms["myform"]["user"].value;
					  var useridletters =/^[a-zA-Z\_]+$/g;
					  if(d !=="")
					{
						if(d.match(useridletters))
						{
							if(d.length > 5 && d.length < 12)
							  {
									return true;
							  }
							  else
							  {
									alert('Name length must be between 5 and 12');
									return false;
							  }
									
						}
						else
						{
							alert("Invalid input for the User name !");
							document.myform.userid.focus();
							return false;
						}
					}
					  
				  }
				  /*Confirm password*/
				  function ValidatePassword()
				  {
					  let p=document.forms["myform"]["password"].value;
					  let t=document.forms["myform"]["rpassword"].value;
									if(t==p)
									{
										return true;
									}
									else
									{
										alert('Passwords are not same');
										return false;
									}
									return true;
							  			  
					  
				  }

				  
				  /*Do all the validations of the form*/
				function doValidation()
				{
					var validation="";
					validation+=Validateuser();
					validation+=ValidatePassword();
				}
			
		</script>
	</script>
	</head>
	<body>

	<h2>Create Account</h2>

	<form action="Takeuserdb.php" method="POST" id="myform" onsubmit="return doValidation()">
	  <div class="imgcontainer">
		<img src="login.jpg" alt="Avatar" class="avatar">
	  </div>

	  <div class="container">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="user" required>
		
		<label for="uname"><b>Date of birth</b></label>
		<input type="Date" placeholder="Enter Date of Birth" name="dob" required>
		
		<label for="uname"><b>Email</b></label>
		<input type="email" placeholder="Enter Email Address" name="email" required>
		
		<label for="uname"><b>Address</b></label>
		<input type="text" placeholder="Enter Address" name="address" required>
		
		<label for="uname"><b>Contact Number</b></label>
		<input type="number" placeholder="Enter Contact Number" name="contact" required>
		
		<label for="uname"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" required>
		
		<label for="psw"><b>Re-enter Password</b></label>
		<input type="password" placeholder="re-enter Password" name="rpassword" required>
			
		<button type="Submit">Create Account</button>
		
	   
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn" onclick="Formreset()">Cancel</button>
		<a href="loginform.php"><button type="button" class="cancelbtn">Login</button></a>
	  
	  </div>
	</form>

	</body>
	</html>
