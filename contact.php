<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/gif" href="images/icon.jpg" />
<title>Mankind Pharma</title>
<link href="contact_css.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, intial-scale=1.0" />


</head>
<body>
	<form method="post" action="contact.php"/>
	<div class="container">
		<header>
		<!--figure class="logo"></figure-->
		<div id="socialicons">
			<a href="https://www.facebook.com/amitstorm/"><img src="images/facebook_icon.jpg" width="37" height="29" /></a>
        	<a href="https://www.mankindpharma.com/"><img src="images/google_icon.jpg" width="37" height="29"	/></a>
			<a href="https://twitter.com/pharma_mankind"><img src="images/twitter_icon.jpg" width="37" height="29"  /></a>
		</div>
		</header>
		<div id="banner">
    		<img src="images/contact-banner.jpg" width="1000" height="336" />
		</div>
    	<nav class="menubar1">
    		<ul>
    			<li><a href="index.html">  Home  </a></li>
    			<li><a href="media_kit.html">  Overview  </a></li>
    			<li><a href="#">  Product  </a></li>
    			<li><a href="#">   Services   </a></li>
    			<li><a href="contact.php">   Contact us   </a></li>
    			<li><a href="admin_login.php">   Administrator   </a></li>
    		</ul>
    	</nav>
  </div>
  <br />
  <center><h1><em><b>CONTACTS</b></em></h1></center>
  <h4><p class="ex"><marquee onmouseover="stop()">If you have any queries or complaints, you can contact us by writing to us. We request you to be as specific as possible so that we can respond to you with accurate answers, in an expedient manner.</marquee></p></h4>
  <div id="maindiv">
  	<div id="subdiv1">
		<table width="500" height="400" border="2" align="center" bgcolor="#FFCCFF">
			<tr>
    			<td align="center" bgcolor="#33FF99" colspan="6"><h1><em>Query Form</em></h1></td>
    		</tr>
			<tr>
    			<td align="center"><b><i>Name</i></b></td>
				<td><input type="text" name="name" />
                <font color="#FF0000"><?php echo @$_GET['e_name'];?></font></td>
            </tr>
    		<tr>
    			<td align="center"><b><i>Email</i></b></td>
        		<td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
                <font color="#FF0000"><?php echo @$_GET['e_email'];?></font></td>
			</tr>
            <tr>
    			<td align="center"><b><i>Address</i></b></td>
				<td><textarea name="address" cols="30"></textarea><!--input type="text" name="address" /-->
                <font color="#FF0000"><?php echo @$_GET['e_address'];?></font></td>
    		</tr>
            <tr>
    			<td align="center"><b><i>Phone No</i></b></td>
				<td><input type="text" name="phone" pattern="[0-9]{1}[0-9]{9}" />
                <font color="#FF0000"><?php echo @$_GET['e_phone'];?></font></td>
    		</tr>
            <tr>
    			<td align="center"><b><i>Your Massage</i></b></td>
				<td><textarea name="massage" cols="30"></textarea><!--input type="text" name="massage" /-->
                <font color="#FF0000"><?php echo @$_GET['e_massage'];?></font></td>
    		</tr>
            
            
            
			<tr>
    			<td colspan="4" align="center"><input type="submit" name="submit" value=" Submit Query " /></td>
    		</tr>
		</table>
    </div>
    <div id="subdiv2"-->
    	<div id="part">MANKIND PHARMA LTD.</div><br />
        <div id="discription">208, Okhla Industrial Estate, Phase III, New Delhi - 110020
			<p style="color:#F00">contact No. :</p>(+91)-11-46541400 (30 Lines),
			<p style="color:#F00">Fax: </p>(+91)-11-46541382
			<p style="color:#F00">Website: </p><p style="color:#306">www.mankindpharma.com</p>
			<p style="color:#F00">Email:</p><p style="color:#306">contact@mankindpharma.com</p>
			<p style="color:#306">businessdevelopment@mankindpharma.com</p>
   		</div>
  	</div>
      

<!--  footer   ---->
<div id="copyright">
  <table border="2px" bgcolor="#00FF99" width="1000px" height="50">
    <tr>
    	<td>
		<center>
			<p style="font-size:15px">&copy;Mankind pharma 2016 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Design by:  <a href="https://www.facebook.com/profile.php?id=100004551275759"><b>Rahul Raj</b></a></p>
        </center>
        </td>
    </tr>
  </table>
</div>
</body>
</html>


<?php
//connection coding
$user = 'root';
$pass = '';
$db = 'students';
$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
//$a = "connection suceess";
//echo $a;
if(isset($_POST['submit']))
{
	$employ_name = $_POST['name'];
	$employ_email = $_POST['email'];
	$employ_address = $_POST['address'];
	$employ_phone = $_POST['phone'];
	$employ_massage = $_POST['massage'];
	if($employ_name=='')
	{	
	echo"<script>window.open('contact.php?e_name=*Enter Name','_self')</script>";
	exit(); 
	}
	if($employ_email=='')
	{	
	echo"<script>window.open('contact.php?e_email=*Enter Email','_self')</script>";
	exit(); 
	}
	if($employ_address=='')
	{	
	echo"<script>window.open('contact.php?e_address=*Enter Your Address','_self')</script>";
	exit(); 
	}
	if($employ_phone=='')
	{	
	echo"<script>window.open('contact.php?e_phone=*Enter Phone no.','_self')</script>";
	exit();
	}
	if($employ_massage=='')
	{	
	echo"<script>window.open('contact.php?e_massage=*Write your Massage','_self')</script>";
	exit();
	}	
	//$que = "insert into employ_query(emp_name,emp_email,emp_address,emp_phone,emp_massage)values('$employ_name','$employ_email','$employ_address','$employ_phone','$employ_massage')";
	//if(mysqli_query($db,$que))
	//{
		echo "<script>alert('THANKS ! YOUR QUERY IS SUBMITTED')</script>";
	//}
}
?>
