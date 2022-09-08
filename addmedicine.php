<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharmative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="medicalhome.php" class="js-logo-clone"><strong class="text-primary">Pharma</strong>tive</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="medicalhome.php">Home</a></li>
                <li class="active"><a href="addbrand.php">Brand</a></li>
                <li class="has-children">
                  <a href="#">Medicines Details</a>
                  <ul class="dropdown">
                    <li><a href="addcategory.php">Category</a></li>
                 
                        <li><a href="addmedicine.php">Medicine</a></li>
                        <li><a href="addstock.php">Stock</a></li>
                        
                      </ul>
                    </li>
                    <!--<li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                    
                  </ul>
                </li>-->
                 <li class="has-children">
                  <a href="#">Request Deatis</a>
                  <ul class="dropdown">
                    <li><a href="viewureg.php">Users</a></li>
                 
                        <li><a href="viewmedreq.php">Medicine Request</a></li>
                       
                        
                      </ul>
                    </li>
                <l class="active"i><a href="logout.php">Logout</a></li>
               
              </ul>
            </nav>
          </div>
          
        </div>
      </div>
    </div>
  

    <div >
      <div class="site-blocks-cover overlay" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
  

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                  <center><br>
                   <form action="medaction.php" method="post" enctype="multipart/form-data">
                   <table style="color:#060">
                   <tr><td>Brand </td><td>&nbsp;</td><td><select name="t1" class="btn btn-primary px-5 py-3">
                   <?php
				   include'DatabaseCon.php';
				   $db=new DatabaseCon;
				   $q="select * from mbrand";
				   $rs=$db->selectData($q);
				   while($row=mysql_fetch_array($rs))
				   {
					   ?>
                       <option><?php echo $row['bname'];?></option><?php
				   }
				   ?></select>
                   </td></tr>
                 <tr><td>Category</td><td>&nbsp;</td><td><select name="t2" class="btn btn-primary px-5 py-3"><?php
				 $q1="select * from category";
				 $rst=$db->selectData($q1);
				 while($row1=mysql_fetch_array($rst))
				 {
					 ?>
                     <option><?php echo $row1['cname'];?></option><?php
				 }
				 ?></select></td></tr>
                 <tr><td>Medicine</td><td>&nbsp;</td><td><input type="text" name="t3" class="btn btn-primary px-5 py-3" required></td></tr>
                 <tr><td>Image</td><td>&nbsp;</td><td><input type="file" name="file" class="btn btn-primary px-5 py-3" required></td></tr>
              <tr><td>Weigth</td><td>&nbsp;</td><td><input type="text" name="t4" class="btn btn-primary px-5 py-3" required></td></tr>
              <tr><td>Quantity</td><td>&nbsp;</td><td><input type="text" name="t5" class="btn btn-primary px-5 py-3" required></td></tr>
              <tr><td>Amount</td><td>&nbsp;</td><td><input type="text" name="t6" class="btn btn-primary px-5 py-3" maxlength="4" minlength="2" required></td></tr>
              <tr><td>Manufacturing Date</td><td>&nbsp;</td><td><input type="text" name="t7" class="btn btn-primary px-5 py-3" value="<?php echo date('Y-m-d');?>" readonly></td></tr>
              <tr><td>Expery Date</td><td>&nbsp;</td><td><input type="date" name="t8" class="btn btn-primary px-5 py-3" min="<?php echo date('Y-m-d');?>" required></td></tr>
              <?php
			  session_start();
			  $val=$_SESSION['uid'];
			  $q2="select * from mshop where mid='$val'";
			  $rsd=$db->selectData($q2);
			  $row2=mysql_fetch_array($rsd);
			  ?>
              <tr><td>Shopname</td><td>&nbsp;</td><td><input type="text" name="t9" class="btn btn-primary px-5 py-3" required value="<?php echo $row2['name'];?>"></td></tr>   
                   <tr><td align="center" colspan="2"><input type="submit" value="ADD" name="submit" class="btn btn-primary px-5 py-3"></td></tr> 
                   </table></form>
                   </center>
                  </div>
                </div>
                
              <!--  <p><a href="login.php" class="btn btn-primary px-5 py-3">Login</a></p>-->
              </div>
            </div>
          </div>
        </div>
      </div>
<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>
