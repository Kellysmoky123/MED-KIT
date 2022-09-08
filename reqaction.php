<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$mid=$_GET['t1'];
$vid=$_GET['t2'];
$mn=$_GET['t3'];
$a=$_GET['t4'];
$qt=$_GET['t5'];
$d=$_GET['t6'];
$q="select * from ureg where rid='$val'";
$rs=$db->selectData($q);
$row=mysql_fetch_array($rs);
$na=$row['name'];
$adr=$row['addr'];
$ph=$row['phno'];
$tamt=$qt*$a;
$q1="insert into request(mid,vid,mname,amt,qty,dte,tamt,uid,name,addr,phno,status)values('$mid','$vid','$mn','$a','$qt','$d','$tamt','$val','$na','$adr','$ph','pending')";
$db->insertQuery($q1);
$q2="select * from medicine where mid='$mid'";
$rst=$db->selectData($q2);
$row2=mysql_fetch_array($rst);
$qtyy=$row2['qty'];
$rqt=$qtyy-$qt;
$q3="update medicine set qty='$rqt' where mid='$mid'";
$db->updateQuery($q3);
				echo "<script> alert('Successfully Submitted, Please wait for approval');window.location='viewmed.php'; </script>";
				?>
