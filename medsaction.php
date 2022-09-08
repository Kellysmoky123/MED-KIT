<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$n=$_GET['t1'];
$a=$_GET['t2'];
$p=$_GET['t3'];
$pn=$_GET['t4'];
$l=$_GET['t5'];
$on=$_GET['t6'];
$ph=$_GET['t7'];
$e=$_GET['t8'];
$ps=$_GET['t9'];
$q="select * from mshop";
$rs=$db->selectData($q);
$row=mysql_fetch_array($rs);
$em=$row['email'];
if($e==$em)
{
		echo "<script> alert('This email id has already registered');window.location='adminhome.php'; </script>";
}
else
{
	$q1="insert into mshop(name,addr,place,pincode,lno,oname,phno,email)values('$n','$a','$p','$pn','$l','$on','$ph','$e')";
	$db->insertQuery($q1);
	$q2="select max(mid) as id from mshop";
	$rst=$db->selectData($q2);
	$row1=mysql_fetch_array($rst);
	$id=$row1['id'];
	$q3="insert into login(uid,uname,upass,utype)values('$id','$e','$ps','medicalstore')";
	$db->insertQuery($q3);
				echo "<script> alert('Successfully Submitted');window.location='adminhome.php'; </script>";
}
?>

