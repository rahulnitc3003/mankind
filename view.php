<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(!$_SESSION['admin_name'])
{
	header('location:admin_login.php?error = You are not an Administrator...!!!');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/gif" href="images/icon.jpg" />
<title>Mankind Pharma</title>
</head>
<body>
    <table align="center" border="10" bordercolor="#FF6600" bgcolor="#FFFF99" width="1000">
    	<tr><br /><br />
        	<td align="center">
            	<form action="view.php" method="get">
    			<b>Search Record&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="search" />
    			<input type="submit" name="submit" value="Search" />
    			</form>
            </td>
            <td><a href="user_registration.php"><center><b>Insert New Record</b></center></a></td>
            <td><a href="logout.php"><center><b>Logout</b></center></a></td>
        </tr>
   </table>
	<center><font color="red" size="6"> 
	<?php echo @$_GET['deleted']; ?>
    <?php echo @$_GET['updated']; ?>    
    </font></center>
	<table align="center" width="1000" border="6" bordercolor="#FF33FF">
    	<tr>
        	<td colspan="20" align="center" bgcolor="#33FFCC"><h1>VIEW ALL RECORD</h1></td>
        </tr>
        <tr align="center">
        	<th>Serial No.</th>
        	<th>Employ Id</th>
        	<th>Employ Name</th>
        	<th>Salary</th>
        	<th>Delete</th>
        	<th>Edit</th>
        	<th>Details</th>
       </tr>
       <?php
		//	final ok
		//connection coding
		$user = 'root';
		$pass = '';
		$db = 'employ';
		$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
		//echo"connection sucess";
		$que = "select * from emp_reg order by 1 DESC";
		$run = mysqli_query($db,$que);
		$i=1;
		while($row = mysqli_fetch_array($run))
		{
			$emp_id = $row[0];
			$emp_name = $row[1];
			$emp_salary = $row[6];
		?>	
         <tr align="center"> 
           	<td><?php echo $i; $i++; ?></td>
            <td><?php echo $emp_id; ?></td>
            <td><?php echo $emp_name; ?></td>
            <td><?php echo $emp_salary; ?></td>
            <td><a  style="color:#F03"href="delete.php?del=<?php echo $emp_id; ?>">Delete</a></td>
            <td><a style="color:#6CF"href="edit.php?edit=<?php echo $emp_id; ?>">Edit</a></td>
            <td><a style="color:#690"href="view.php?details=<?php echo $emp_id; ?>">Details</a></td>
        </tr>
		<?php } ?>
        <!--	coding for details operations	-->
<?php
//	FINAL OK
$record_details = @$_GET['details'];
$query = "select * from emp_reg where emp_id ='$record_details'";
$run1 = mysqli_query($db, $query);
while($row1 = mysqli_fetch_array($run1))
{
	$id = $row1[0];
	$name = $row1[1];
	$address = $row1[2];
	$email = $row1[3];
	$phone = $row1[4];
	$qua = $row1[5];
	$salary = $row1[6];
	/*$name = $row1[1];
	$father = $row1[2];
	$school = $row1[3];
	$roll = $row1[4];
	$class = $row1[5];*/
?>
<br />
<table align="center" border="5" bgcolor="#99FF66" width="800">
	<tr><br/>
    	<td colspan="7" bgcolor="#FF9966" align="center"><h2>YOUR DETAIL'S HERE</h2></td>
    </tr>
    <tr align="center" bgcolor="#00CCFF">
   		<td><b>EMPLOY ID</b></td>
        <td><b>EMPLOY NAME</b></td>
        <td><b>ADDRESS</b></td>
        <td><b>EMAIL</b></td>
        <td><b>PHONE</b></td>
        <td><b>QUALIFICATION</b></td>
        <td><b>SALARY</b></td>
   </tr>
    <tr align="center">
    	<td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $qua; ?></td>
        <td><?php echo $salary; ?></td>
    </tr>
    <?php } ?>
    <!--/table>
    <table align="center" border="10" bordercolor="#FF6600" bgcolor="#FFFF99" width="1000">
    	<tr><br /><br />
        	<td align="center"><form action="view.php" method="get">
    			<b>Search Record&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="search" />
    			<input type="submit" name="submit" value="Search" />
    			</form>
            </td>
        </tr>
     </table-->
     <?php
//FINAL OK	 
//	coding for search operation
	 if(isset($_GET['search']))
	 {
		 $search_record = $_GET['search'];
		 
		 $query2 = "select *from emp_reg where emp_name = '$search_record' OR emp_id = '$search_record'";
		 $run2 = mysqli_query($db,$query2);
		 
		 while($row2 = mysqli_fetch_assoc($run2))
		 {
			 $id123 = $row2['emp_id'];
			 $name123 = $row2['emp_name'];
			 $address123 = $row2['emp_address'];
			 $email123 = $row2['emp_email'];
			 $phone123 = $row2['emp_phone'];
			 $qua123 = $row2['emp_qua'];
			 $salary123 = $row2['emp_salary'];
	 	?>
        <table width="800" bgcolor="#CCFFFF" align="center" border="1">
        	<tr align="center">
            	<td><?php echo $id123; ?></td>
            	<td><?php echo $name123; ?></td>
                <td><?php echo $address123; ?></td>
                <td><?php echo $email123; ?></td>
                <td><?php echo $phone123; ?></td>
                <td><?php echo $qua123; ?></td>
                <td><?php echo $salary123; ?></td>
             </tr>
        <?php }} ?>
</body>
</html>
