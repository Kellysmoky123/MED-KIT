<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$n=$_GET['t1'];
$a=$_GET['t2'];
$g=$_GET['t3'];
$p=$_GET['t4'];
$e=$_GET['t5'];
$ps=$_GET['t6'];
$q="select * from ureg";
$rs=$db->selectData($q);
$row=mysql_fetch_array($rs);
$em=$row['email'];
if($e==$em)
{
		echo "<script> alert('This email id has already registered');window.location='ureg.php'; </script>";
}
else
{
	$q1="insert into ureg(name,addr,gen,phno,email)values('$n','$a','$g','$p','$e')";
	$db->insertQuery($q1);
	$q2="select max(rid) as id from ureg";
	$rst=$db->selectData($q2);
	$row1=mysql_fetch_array($rst);
	$id=$row1['id'];
	$q3="insert into login(uid,uname,upass,utype)values('$id','$e','$ps','user')";
	$db->insertQuery($q3);
			echo "<script> alert('Successfully registered');window.location='index.html'; </script>";
}
?>
