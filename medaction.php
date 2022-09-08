<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
if(isset($_POST['submit']))
{
	$name=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
	if(isset($name))
	{
		if(!empty($name))
		{
			$location='uploads/';
			echo"file is".$name;
			if(move_uploaded_file($tmpname,$location.$name))
$b=$_POST['t1'];
$c=$_POST['t2'];
$m=$_POST['t3'];
$w=$_POST['t4'];
$qt=$_POST['t5'];
$a=$_POST['t6'];
$md=$_POST['t7'];
$ed=$_POST['t8'];
$sn=$_POST['t9'];
$q="insert into medicine(bname,cname,mname,img,weight,qty,amt,mdte,edte,sname,vid)values('$b','$c','$m','$name','$w','$qt','$a','$md','$ed','$sn','$val')";
$db->insertQuery($q);
				echo "<script> alert('Successfully Submitted');window.location='medicalhome.php'; </script>";

		}
	}
}
?>


