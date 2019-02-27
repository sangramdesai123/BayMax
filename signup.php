<?php
include_once 'partial/connection.php';
if(isset($_GET['login'])){
	$pass = mysqli_real_escape_string($con,$_GET['password']);
	$email = mysqli_real_escape_string($con,$_GET['email']);
	echo $pass." ".$email;
	$sql="SELECT * FROM `login` WHERE email='$email'";
	$result=mysqli_query($con,$sql);
	$resultCheck=mysqli_num_rows($result);
	if($resultCheck>0){
		$row=mysqli_fetch_array($result);
		if($row['pass']==$pass){
			header("Location:home.php");//send to index page where animation and 
			exit();
		}else{
			header("Location:login.php?login=error");
			exit();
		}
	}else{
		header("Location:login.php?login=error");
		exit();
	}
}
if (isset($_GET['signup'])) {
	$name = mysqli_real_escape_string($con,$_GET['name']);
	$mob = mysqli_real_escape_string($con,$_GET['mobile']);
	$email = mysqli_real_escape_string($con,$_GET['email']);
	$pass = mysqli_real_escape_string($con,$_GET['password']);
	echo $name." ".$pass." ".$email;
	$sql="SELECT * FROM `login` WHERE email='$email'";
	$result=mysqli_query($con,$sql);
	$resultCheck=mysqli_num_rows($result);
	if($resultCheck>0){
		header("Location:login.php?signup=userNameExist");
		exit();
	}
	else{
		$sql="INSERT INTO `login`(`name`, `mobile`, `email`, `pass`) VALUES ('$name','$mob','$email','$pass');";
		mysqli_query($con,$sql);
		header("Location:login.php?signup=Success");
		exit();
	}

}

?>