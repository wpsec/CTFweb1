<?php
	$username=$_GET['username'];
	$password=$_GET['password'];
	$connect=mysql_connect('127.0.0.1','root','root');
	if(!$connect){
		exit("connect failure!");
	}
	$selectdb=mysql_select_db("hello",$connect);
	if(!$selectdb){
		exit("select db failure");
	}	
	$sql="select * from user where username='$username' and password='$password'";
	$result=mysql_query($sql,$connect);
	if(!$result){
		exit("no result!");
	}else{
		$num=mysql_num_rows($result);
	}
	if($num!=0){
	header("location:success.html");
	}else{
		header("location:failure.html");
	}
	mysql_close($connect);
?>
















?>