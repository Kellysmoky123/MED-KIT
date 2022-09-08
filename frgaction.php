<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$e1=$_GET['t1'];

$q="select * from login where uname='$e1'";
$rs=$db->selectData($q);
$row=mysql_fetch_array($rs);
$e=$row['uname'];
$ps=$row['upass'];
//$cp=$_GET['t2'];
//$np=$_GET['t3'];
if($e1==$e)
{
	
 echo "<script> alert('Your password is $ps');window.location='index.html';</script>";
 }
 else
 {
	  echo "<script> alert('Email doesnot match');window.location='index.html?y=s';</script>";
 }
 ?>