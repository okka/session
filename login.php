
<?php
$uid = $_POST['uid'];
$pw = $_POST['pw'];

include("config.php");


$pw = sha1($pw);
  
      $sql = "SELECT * FROM rdv WHERE email = '$uid' and pass = '$pw'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
     
         
         
         
if($count >= 1) {      
		
		session_start();
		$_SESSION['sid']=session_id();
		header("location:home.php");
	
}else {
		  echo'Your Login Name or Password is invalid';
         $error = "Your Login Name or Password is invalid";
      }      
?>
