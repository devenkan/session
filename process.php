<?php
session_start();
include 'db.php';
if(isset($_POST['submit']))
{
if(!empty($_POST['email'])&&($_POST['password']))

{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	
		$query="SELECT * FROM tbl where email='$email' && password='$password'";
		$query1=mysqli_query($con,$query);
		if(mysqli_num_rows($query1)>=1)
	{
		echo "<script>yes we conected to db</script>";
		$_SESSION['email']=$_POST['email'];
		header("location:profile.php");
	}
	else
	{
		echo "<script>alert('username and password doesnt match try again');</script>";
		include 'index.php';
	}
	
}
}

?>