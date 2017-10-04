<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/gif" href="images/icon.jpg" />
<title>Mankind Pharma</title>
</head>

<body>
<?php
		//connection coding
		$user = 'root';
		$pass = '';
		$db = 'employ';
		$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
		//echo"connection sucess";
		$delete_record = $_GET['del'];
		$que = "delete from emp_reg where emp_id ='$delete_record'";
		if(mysqli_query($db,$que))
		{
			echo "<script> window.open('view.php?deleted=Record has been delete sucessfully!!!','_self')</script>";
			/*echo "<script>alert('RECORD HAS BEEN DELETED')</script>";*/
			 
		}
?>
</body>
</html>
