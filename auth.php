<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="auth.css">
</head>
<body>
    <div class="main">    	
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="login">
			<form class="form">
				<label for="chk" aria-hidden="true">Log in</label>
				<input class="input" type="email" name="email" placeholder="Username" required="">
				<input class="input" type="password" name="pswd" placeholder="Password" required="">
				<button class="login-btn"><a href="index.php">Log In</a></button>
				<!-- Add the admin button below -->
				<button class="admin-btn"><a href="authAdmin.php">Admin</a></button>
			</form>
		</div>

		<div class="register">
			<form class="form">
				<label for="chk" aria-hidden="true">Register</label>
				<input class="input" type="text" name="txt" placeholder="Username" required="">
				<input class="input" type="email" name="email" placeholder="Password" required="">
				<input class="input" type="password" name="pswd" placeholder="Confirm Password" required="">
				<button class="register-btn"><a href="index.php">Register</a></button>
			</form>
		</div>
	</div>
</body>
</html>