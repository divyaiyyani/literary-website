<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['username']);
	$password=filter($_POST['password']);
	$password=md5($password);
	

	$dbc=mysqli_connect('localhost','root','','login') or die("can not connect to database ");
	$query="SELECT * FROM users WHERE email='".$username."' AND password='".$password."' ";
	$result=mysqli_query($dbc,$query);
	if(mysqli_num_rows($result)==1)                         
	{
		$row=mysqli_fetch_array($result);
		
		$_SESSION['username']=$username;

		alert("User Registered");	
	}
	else
	{
		alert("User Registered wrong username or password");
	}
}
else
{
	echo "go to the login page";
}

function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>