<?php
	$con = mysqli_connect('127.0.0.1', 'root','','yt');
	$query = mysqli_query($con, "SELECT * FROM users WHERE name ='{$_POST['name']}' AND password ='{$_POST['password']}'");
	$stroka=$query->fetch_assoc();
	if (mysqli_num_rows($query)>0) {
		header('location: home.php?id='.$stroka['id']);
	}
	else{
		header('location: index.php');
	}
?>
