<?php 

  include("database.php");

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$_POST = array();
		$username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
		$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_SPECIAL_CHARS);
		$password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);

		try {
			if(empty($username) && empty($email) && empty($password)) {
			
				echo 	'<script>alert("Please Enter Values") </script>';
			}else{
				$hash = password_hash($password, PASSWORD_DEFAULT);
	
				$sql = "INSERT INTO user (username, email, password)
							VALUES ('$username', '$email', '$password')";
				mysqli_query($conn, $sql);
				echo 	'<script>alert("You are now Registered!") </script>';
	
				header("Location: auth.php");
				exit;	
			}
		} catch(mysqli_sql_exception){
				echo '<script> alert("User Already Exist")</script>';
		}		
	} 
	mysqli_close($conn);
?>