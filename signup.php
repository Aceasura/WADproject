<?php	
	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'authentication');
	
	if (isset($_POST["username"])){

		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$phonenum = mysqli_real_escape_string($db,$_POST['phonenum']);
		
		$sql_u ="SELECT * FROM `users` WHERE username='$username'";
		$res_u = mysqli_query($db, $sql_u) or die(mysqli_error($db));
		$password = md5($password);	
		if(mysqli_num_rows($res_u) > 0){
			$message = "Username exists";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		else{
		$sql = "INSERT INTO `users`(`username`, `password`, `email`, `address`, `phonenum`) 
		VALUES ('$username', '$password', '$email', '$address', '$phonenum')";
			
		$result = mysqli_query($db, $sql) or die(mysqli_error($db));

		header("location: home.php"); //redirect 
		}
	}
		?>

<html>
<link rel="stylesheet" href="styles.css"/>
<head>
<title>Rats</title>
</head>
<body>
<div class="glitchpic">
<img src="https://i.pinimg.com/originals/94/67/25/946725e5a54b21344b8fa83532f4a30c.gif" width='585' height='639'></a>
</div>
<h2>Welcome To Rats R Us</h2>

<div class="desctext">
Do you have what it takes<p>
to be one<p>
?of us
</div>

<div class="wrapper">
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
</div>
<div id="id02" class="modal">
  
  <form  action="signup.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
    <div class="container">
       <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>       
	  <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
	  <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>
	  <label for="phonenum"><b>Phone Number</b></label>
      <input type="text" placeholder="Enter Phone Number" name="phonenum" required>
	  
	  <input type="submit" value="Sign In" name="register_btn">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Please don't forget me.
      </label>
    </div>
	</form>
</div>


</body>
</html>