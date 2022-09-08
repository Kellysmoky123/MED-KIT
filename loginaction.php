<?php
include"DatabaseCon.php";
$db=new DatabaseCon;

$u=$_GET['t1'];
$p=$_GET['t2'];


	$query="select * from login where uname='$u' and upass='$p'";
	echo "<script> alert('invalid password or username');window.location='index.html';</script>";
	$ret=$db->selectQuery($query);
$rst=$db->selectData($query);
	$row=mysql_fetch_array($rst);
	
	if ($ret==1)
	{
		session_start();
		if($row['utype']=="admin")
		{
			$_SESSION['uid']=$row['uid'];
			header('location:adminhome.php');
			
		}
		else if($row['utype']=="user")
		{
			$_SESSION['uid']=$row['uid'];
			header('location:userhome.php');
			
		}
		else if($row['utype']=="medicalstore")
		{
			$_SESSION['uid']=$row['uid'];
			header('location:medicalhome.php');
			
		}
		
		else
		{
			header('location:index.html');
		}
		$d->closeDatabase();
	}
?>