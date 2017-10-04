<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(!$_SESSION['admin_name'])
{
	header('location:admin_login.php?error = Your are not an Administrator...!!!');
}
?>
<?php
//connection coding
$user = 'root';
$pass = '';
$db = 'employ';
$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
//echo"connection sucess";
$edit_record = @$_GET['edit'];
$query = "select * from emp_reg where emp_id = '$edit_record'";

$run = mysqli_query($db,$query);
while($row = mysqli_fetch_array($run))
{
	$emp_id = $row[0];
	$emp_name = $row[1];
	$emp_address = $row[2];
	$emp_mail = $row[3];
	$emp_phone = $row[4];
	$emp_qua = $row[5];
	$emp_salary = $row[6];
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/gif" href="images/icon.jpg" />
<title>Mankind Pharma</title>
</head>

<body background="images/ban3.png">
<form method="post" action='edit.php?edit_form=<?php echo $edit_id; ?>'>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<table width="500" border="20" style="border-style:outset" align="center" bordercolor="#CC99FF">
	<tr>
   	  <th bgcolor="#00FFCC" colspan="5"><b><em>UPDATE INFORMATION</em></b></th>
  	</tr>
    <tr>
   	  <td align="center" bgcolor="#FFCCCC"><b>Employ's Name</b></td>
        <td>
        	<input type="text" name="emp_name1" value='<?php echo $emp_name;?>' />
        </td>
    </tr>
    
    
    <tr>
   	  <td align="center" bgcolor="#FFCCCC"><b>Employ's Id</b></td>
        <td>
        	<input type="text" name="emp_id1" value='<?php echo $emp_id;?>' />
        </td>
    </tr>
    <!--tr>
   	  <td align="center" bgcolor="#FFCCCC"><b>Employ Id</b></td>
        <td><input type="text" name="father_name1" value='<!--?php echo $s_father;?>' />
        </td>;
    </tr-->
    <tr>
   	  <td align="center" bgcolor="#FFCCCC"><b>Address</b></td>
        <td><!--input type="text" name="school_name1" value='<!--?php echo $s_school;?>' /-->
        <textarea name="emp_address1" cols="22px"><?php echo $emp_address;?></textarea>
        </td>
    </tr>
    <tr>
   	  <td align="center" bgcolor="#FFCCCC"><b>Email</b></td>
        <td>
        	<input type="text" name="emp_mail1" value='<?php echo $emp_mail;?>' />
        </td>
    </tr>
    <tr>
   	  <td align="center" bgcolor="#FFCCCC"><b>Contact No.</b></td>
        <td>
        	<input type="text" name="emp_phone1" value='<?php echo $emp_phone;?>' />
        </td>
    </tr>
    
    <tr>
   	  <td align="center" bgcolor="#FFCCCC"><b>Salary</b></td>
        <td><input type="text" name="emp_salary1" value='<?php echo $emp_salary;?>' />
	    </td>
    </tr>
    <tr>
   	  <td align="center" bgcolor="#FFCCCC"><b>Qualification</b></td>
        <td>
       	  <select name="emp_qua1">
            <option value='<?php echo "$emp_qua"?>'><?php echo "$emp_qua"?></option>
            <option value="Under Graduate">Under Graduate</option>
            <option value="Graduate">Graduate</option>
            <option value="Post Graduate">Post Graduate</option>
          </select>
       	</td>
    </tr>
    <tr height="50px">
    	<td align="center" colspan="6">
        <a href="view.php"><input type="submit" name="update" value=" Update "/></a>
        <a href="view.php"><input type="button" name="back" value="  Back  "/></a>
        </td>
    </tr>
</table>



</body>
</html>
<?php
if(isset($_POST['update']))
{
	$edit_record1 = $_GET['edit_form'];
	$emp_name = $_POST['emp_name1'];
	$emp_id = $_POST['emp_id1'];
	$emp_address = $_POST['emp_address1'];
	$emp_mail = $_POST['emp_mail1'];
	$emp_phone = $_POST['emp_phone1'];
	$emp_salary = $_POST['emp_salary1'];
	$emp_qua = $_POST['emp_qua1'];
	$query1 = "update emp_reg set emp_name = '$emp_name' , emp_id = '$emp_id' , emp_address = '$emp_address' , emp_mail = '$emp_mail' , emp_phone = '$emp_phone' , emp_salary = '$emp_salary' , emp_qua = '$emp_qua' where emp_id = '$edit_record1'";
	if(mysqli_query($db,$query1))
	{
		/*echo "<script>window.open('view.php?updated=Record has been Updated!!!','_self')</script>";*/
        echo "<script>alert('RECORD HAS BEEN SUCESSFULLY UPDATED !!!')</script>";
	}
}
?>
