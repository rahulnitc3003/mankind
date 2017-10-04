<?php
session_start();
if(!$_SESSION['admin_name'])
{
	header('location:admin_login.php?error = Your are not an Administrator...!!!');
}
?>

<html>
	<head>
		<link rel="icon" type="image/gif" href="images/icon.jpg" />
		<title>Mankind Pharma</title>
	</head>
	<body background="images/Queen Elizabeth Hospital Birmingham.jpg">
		<form method="post" action="user_registration.php">
			<table width="500" border="20" align="center" bordercolor="#33FF66">
				<tr>
					<th bgcolor="#FFFF66" colspan="5"><h1><em>ENTRY FORM</em></h1></th>
				</tr>
				<tr height="50px">
					<td align="center"><b><b>Employ's Name</b></b></td>
					<td>
						<input type="text" name="employ_name" />
						<font color="#FF0000"><?php echo @$_GET['name'];?></font>
					</td>
				</tr>
				<tr height="50px">
					<td align="center"><b>Employ's id</b></td>
					<td>
						<input type="text" name="employ_id" />
						<font color="#FF0000"><?php echo @$_GET['id'];?></font>
					</td>
				</tr>
				<tr height="50px">
					<td align="center"><b>Address</b></td>
					<td>
						<textarea name="employ_address" cols="18px"></textarea>
						<font color="#FF0000"><?php echo @$_GET['address'];?></font>
					</td>
				</tr>
				<tr height="50px">
					<td align="center"><b>Email</b></td>
					<td>
						<input type="text" name="employ_email" />
						<font color="#FF0000"><?php echo @$_GET['email'];?></font>
					</td>
				</tr>
				<tr height="50px">
					<td align="center"><b>Contact No.</b></td>
					<td>
						<input type="text" name="employ_phone" />
						<font color="#FF0000"><?php echo @$_GET['phone'];?></font>
					</td>
				</tr>
				<tr height="50px">
					<td align="center"><b>Salary</b></td>
					<td>
						<input type="text" name="employ_salary" />
						<font color="#FF0000"><?php echo @$_GET['salary'];?></font>
					</td>
				</tr>
				<tr height="50px">
					<td align="center"><b>Qualification</b></td>
					<td>
						<select name="employ_qualification">
							<option value="null">Qualification</option>
							<option value="Under Graduate">Under Graduate</option>
							<option value="Graduate">Graduate</option>
							<option value="Post Graduate">Post Graduate</option>
						</select>
						<font color="#FF0000"><?php echo @$_GET['qualification'];?></font>
					</td>
				</tr>
				<tr height="50px">
					<td align="center" colspan="6">
						<input type="submit" name="submit" value=" Submit "/>
						<a href="view.php"><input type="button" name="back" value="  Back  "/></a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
//connection coding
$user = 'root';
$pass = '';
$db = 'employ';
$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
//echo"connection sucess";
if(isset($_POST['submit']))
{
	$emp_name = $_POST['employ_name'];
	$emp_id = $_POST['employ_id'];
	$emp_address = $_POST['employ_address'];
	$emp_email = $_POST['employ_email'];
	$emp_phone = $_POST['employ_phone'];
	$emp_salary = $_POST['employ_salary'];
	$emp_qua = $_POST['employ_qualification'];
	if($emp_name=='')
	{	
	echo"<script>window.open('user_registration.php?name=*Enter Employ Name','_self')</script>";
	exit(); 
	}
	if($emp_id=='')
	{	
	echo"<script>window.open('user_registration.php?id=*Enter Employ id','_self')</script>";
	exit(); 
	}
	if($emp_address=='')
	{
	echo"<script>window.open('user_registration.php?address=*Enter Address','_self')</script>";
	exit(); 
	}
	if($emp_email=='')
	{	
	echo"<script>window.open('user_registration.php?email=*Enter Email id','_self')</script>";
	exit();
	}
	if($emp_phone=='')
	{	
	echo"<script>window.open('user_registration.php?phone=*Enter Phone No.','_self')</script>";
	exit();
	}
	if($emp_salary=='')
	{	
	echo"<script>window.open('user_registration.php?salary=*Enter Salary','_self')</script>";
	exit();
	}
	if($emp_qua=='null')
	{	
	echo"<script>window.open('user_registration.php?qualification=*Select Employ Qualification','_self')</script>";
	exit();
	}
	$que = "insert into emp_reg(emp_name,emp_id,emp_address,emp_email,emp_phone,emp_salary,emp_qua)values('$emp_name','$emp_id','$emp_address','$emp_email','$emp_phone','$emp_salary','$emp_qua')";
	if(mysqli_query($db,$que))
	{
		echo "<script>alert('DATA HAS BEEN INSERTED SUCESSFULLY!!!')</script>";
	}
}
?>
