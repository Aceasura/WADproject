<?php	
	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'authentication');
	
	//isset checks whether those variables exist or not.
	if (isset($_POST["username"]) && isset($_POST["password"])){ 

	
		$username = mysqli_real_escape_string($db,$_POST['username']); //POST is values sent by the HTML method
		$password = mysqli_real_escape_string($db,$_POST['password']);

	
		$password = md5($password); //hash password to store it in the system. this is for security reasons
		$sql = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
		
		if (mysqli_num_rows($result) == 1){
			header("location: home.php");		//redirects to home.php
		}
		
		else if ($username !="username" || $password != "password"){
			$message = "Username and/or Password incorrect.\\nTry again.";
			echo "<script type='text/javascript'>alert('$message');</script>";			//this is the javascript
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
<img src="https://i.pinimg.com/originals/94/67/25/946725e5a54b21344b8fa83532f4a30c.gif"></a>
</div>

<h2>Rats R Us</h2>
<div class="desctext">
We are here to<p>
dominate the world<p>
.as rats
</div>

<div class="wrapper">	
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
<a href="signup.php"><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button></a>
</div>
</table>
<div id="id01" class="modal">
  
  <form  action="login.php" method="post"> 	
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Login">&times;</span> <!-- &times; is the X button -->
      <img src="https://thumbs.gfycat.com/MemorableDampBooby-small.gif" alt="Avatar" class="avatar">
    </div>

    <div class="container">
	<label>User Name :</label>
	<input type="text" name="username" id="username"/>
	<label>Password :</label>
	<input type="password" name="password" id="password"/>
	<input type="submit" value="Log In" name="login_btn">
	</form>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Don't forget me.
      </label>
    </div>
  </form>

</body>
</html>