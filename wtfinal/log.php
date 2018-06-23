
		<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['username']);
	$password=filter($_POST['password']);
	$password=md5($password);
	

	$dbc=mysqli_connect('localhost','root','','fiction') or die("can not connect to database ");
	$query="SELECT * FROM login WHERE email='".$username."' AND password='".$password."' ";
	$result=mysqli_query($dbc,$query);
	if(mysqli_num_rows($result)==1)                         
	{
		$row=mysqli_fetch_array($result);
		
		$_SESSION['username']=$username;
		if(isset($_SESSION['username'])){
		header("Location:http://localhost/wtfinal/home.php");
		}
	}
	else
	{
		echo '<script type="text/javascript"> alert("Wrong password");
		</script>';
	}
}

if(isset($_SESSION['username'])){
	header("Location:http://localhost/wtfinal/home.php");
}
function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>