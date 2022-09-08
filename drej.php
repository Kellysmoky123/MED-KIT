<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$id=$_GET['id'];
$q="update login set status='Reject' where uid='$id'";
$db->updateQuery($q);
echo "<script> alert('Successfully Rejected');window.location='viewdreg.php';</script>";
?>