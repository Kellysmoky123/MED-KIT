<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$cc=$_GET['t1'];
$cn=$_GET['t2'];
$q="insert into category(ccode,cname)values('$cc','$cn')";
$db->insertQuery($q);
				echo "<script> alert('Successfully Submitted');window.location='medicalhome.php'; </script>";
?>