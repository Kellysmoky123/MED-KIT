<?php


		session_start();
		if(session_destroy())
		{
			//$_SESSION['uid']=='null';
			
			//$_SESSION['utype']=='null';
		
			header('location:index.html');
		}
		
?>