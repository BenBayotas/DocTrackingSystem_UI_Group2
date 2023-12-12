<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="auth.css">
</head>
<body>
    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
				<form class="form" action="authAdmin.php" method="post">
					<label for="chk" aria-hidden="true">Admin Log in</label>
					<input class="input" type="text" name="admin_name" placeholder="Username" required="">
					<input class="input" type="password" name="admin_pswd" placeholder="Password" required="">
					<button type="submit" class="login-btn" name="admin-login">Log In</button>
				</form>
			</div>
	</div>
</body>
</html>

<?php 

//Admin Login Credentials
	if(isset($_POST['admin-login']))
	{
		
		if(!empty($_POST['admin_name']) && !empty($_POST['admin_pswd'])){
			
			$admin_name = $_POST['admin_name'];
			$admin_pswd = $_POST['admin_pswd'];

			if($admin_name == "admin" && $admin_pswd == "dtsadmin123")
			{
				header("Location: index.php");
			}
			else 
			{
				header("Location: auth.php");
			}
		}


	}


?>