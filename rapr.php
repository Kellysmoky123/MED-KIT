<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$id=$_GET['id'];
$q="update request set status='Approved' where rqid='$id'";
$db->updateQuery($q);
				echo "<script> alert('Successfully approved');window.location='viewmedreq.php'; </script>";
?>