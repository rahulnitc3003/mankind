<?php
session_start();
?>
<html>
<head>
	<link rel="icon" type="image/gif" href="images/icon.jpg" />
<title>Mankind Pharma</title>
<style>
	body{
		background : url("images/login1.jpg");
		background-size : 650px 650px;
		background-repeat: repeat;
		padding-top : 10;
		}
	</style>
</head>

<body bgcolor="gold">
<form action="admin_login.php" method="post">

<angle="45"><table width="300"  border="5" align="center" bgcolor="#D8A720"></angle>
	<tr>
    	<td align="center" bgcolor="gold" colspan="6"><h1><em>Administrator</em></h1></td>
    </tr>
	<tr>
    	<td align="center"><b><i>Admin id:</i></b></td>
		<td><input type="text" name="admin_name" /></td>
    </tr>
    
    <tr>
    	<td align="center"><b><i>Password:</i></b></td>
        <td><input type="password" name="admin_pass" /></td>
	</tr>
	<tr>
    	<td colspan="4" align="center"><input type="submit" name="login" value="Login" />
        <a href="index.html"><input type="button" name="back" value="Home Page" /></a></td>
    	
    </tr>
</table>
</form>
<center><?php echo @$_GET['error']; ?></center>
</body>
</html>
<?php
//connection coding
		$user = 'root';
		$pass = '';
		$db = 'employ';
		$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
		//echo"connection sucess";
if(isset($_POST['login']))
{
	$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	//$_SESSION['admin_name'];
	$query = "select * from login where user_name = '$admin_name' AND user_password = '$admin_pass'";
	$run = mysqli_query($db,$query);
	if( mysqli_num_rows($run) > 0 )
	{
		echo "<script>window.open('view.php?logged=Logged in Sucessflly...!','_self')</script>";
	}
		else
		{
			echo "<script>alert('User Name Or Password is incorrect...')</script>";
		}
	}
	?>
