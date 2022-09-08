<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$m=$_GET['t1'];
$md=$_GET['t2'];
$ed=$_GET['t3'];
$qt=$_GET['t4'];
$q="insert into stock(mname,mdte,edte,qty,vid)values('$m','$md','$ed','$qt','$val')";
$db->insertQuery($q);
				echo "<script> alert('Successfully Submitted');window.location='medicalhome.php'; </script>";
?>