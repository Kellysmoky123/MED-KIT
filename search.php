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
              <a href="userhome.php" class="js-logo-clone"><strong class="text-primary">Pharma</strong>tive</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="userhome.php">Home</a></li>
                <li class="active"><a href="viewmedshop.php">Medical Shop</a></li>
                <li class="active"><a href="search.php">Search</a></li>
                <li class="has-children">
                  <a href="#">View Medicines</a>
                  <ul class="dropdown">
                    <li><a href="viewcat.php">Category</a></li>
                 
                        <li><a href="viewmed.php">Medicine</a></li>
                      
                        
                      </ul>
                    </li>
                    <li class="active"><a href="viewrqstatus.php">Request Status</a></li>
                    <!--<li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                    
                  </ul>
                </li>
                 <li class="has-children">
                  <a href="#">Request Deatis</a>
                  <ul class="dropdown">
                    <li><a href="viewureg.php">Users</a></li>
                 
                        <li><a href="viewmedreq.php">Medicine Request</a></li>
                       
                        
                      </ul>
                    </li>-->
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
                <h1 class="mb-0"><strong class="text-primary">BRAND DEATILS</strong> </h1><br>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                  <center>
                  <form action="" method="post">
           <table style="color:#060">
         <tr><td>Place</td><td><input type="text" name="t1" required="yes"class="btn btn-primary px-5 py-3"></td><td>&nbsp;</td><td><input type="submit" value="Search"class="btn btn-primary px-5 py-3"></td></tr>
           </table>
           </form>
             <?php
		   include'DatabaseCon.php';
		   $db=new DatabaseCon;
		   if(!empty($_POST['t1']))
{
  $a=$_POST['t1'];
  //$b=$_POST['t2'];
  //$c=$_POST['t3'];
  $q="select * from mshop where place='$a'";
  $rt=$db->selectQuery($q);
  if($rt==1)
  {
	  
  $rs=$db->selectData($q);
  while($row=mysql_fetch_array($rs))
  {
	  ?>
      <br>
      <table border="2" style="color:#FFF">
      <tr>
      <th>Name</th>
      <th>Address</th>
      <th>Place</th>
      <th>Pincode</th>
      <th>Owner Name</th>
      <th>Phone Number</th>
      <th>Email</th>
      </tr>
      <tr>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['addr'];?></td> <td><?php echo $row['place'];?></td>
      <td><?php echo $row['pincode'];?></td>
      <td><?php echo $row['oname'];?></td>
      <td><?php echo $row['phno'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><a href="viewmedd.php?id=<?php echo $row['mid'];?>"><font color="#FFFFFF">VIEW MEDICINES</font></a></td>
       <td><a href="https://www.google.com/maps/place/<?php echo $row['place'];?>" style="color: white;background: green"  target="_blank"><font color="#FFFFFF">Map</font></a></td>
      </tr>
       <?php
  }
  ?>
  <?php
  }
}
  ?>
  </table>
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
