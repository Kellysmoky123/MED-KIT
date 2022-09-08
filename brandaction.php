<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$b=$_GET['t1'];
$q="insert into mbrand(bname)values('$b')";
$db->insertQuery($q);
				echo "<script> alert('Successfully Submitted');window.location='medicalhome.php'; </script>";
				?>
