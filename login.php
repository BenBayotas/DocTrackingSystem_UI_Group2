<?php
  include("database.php");

  if (isset($_POST['login'])) {
    $username = $_POST['logname'];
    $password = $_POST['logpword'];
    
    $select = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($select);

   if($result->num_rows == 1) {
    header("Location: index.php");
   }else {
    echo '<script>alert("Invalid Username or Password") </script>';
    header("Location: auth.php");
   }
  }
?>