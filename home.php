<!-- this code of php must be included for all ur page -->
<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
		
	}
	else
	{
		header("location:index.php");
	}
?>

<!DOCTYPE HTML>
<html>
	
<head>

   
    <title>home</title>	

</head>
  
<body>
    <p>hello batata!</p>
    <a href="logout.php">logout!</a>

</body>
</html>
