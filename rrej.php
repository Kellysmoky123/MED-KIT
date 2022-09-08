<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$id=$_GET['id'];
$q="update request set status='Rejected' where rqid='$id'";
$db->updateQuery($q);
				echo "<script> alert('Successfully Rejected');window.location='viewmedreq.php'; </script>";
?>