<?php 
	include_once("register.php");
	include_once("login.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="auth.css">
</head>
<body>
    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
				<form class="form" action="login.php" method="POST">
					<label for="chk" aria-hidden="true">Log in</label>
					<input class="input" type="text" name="logname" placeholder="Username" required="">
					<input class="input" type="password" name="logpword" placeholder="Password" required="">
					<button type="submit" class="login-btn" name="login">Log In</a></button>
					<button  class="login-btn"><a href="authAdmin.php"style="color: white; text-decoration: none;">Admin Log In</a></button>			
				</form>
			</div>

      <div class="register">
				<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" class="form" method="post">
					<label for="chk" aria-hidden="true">Register</label>
					<input class="input" type="text" name="username" placeholder="Username" required="">
					<input class="input" type="email" name="email" placeholder="Email" required="">
					<input class="input" type="password" name="password" placeholder="Password" required="">
					<button type="submit" class="register-btn" name="submit"> Register</button>
				</form>
			</div>
	</div>
</body>
</html>