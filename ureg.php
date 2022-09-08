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
              <a href="ureg.php" class="js-logo-clone"><strong class="text-primary">Pharma</strong>tive</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li class="active"><a href="ureg.php">Registration</a></li>
               <!-- <li class="has-children">
                  <a href="#">Products</a>
                  <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li class="has-children">
                      <a href="#">Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
                    
                  </ul>
                </li>-->
                <l class="active"i><a href="login.php">Login</a></li>
               
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
                <h1 class="mb-0"><strong class="text-primary">USER REGISTRATION</strong> </h1><br>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                  <center>
                   <form action="uregaction.php" onSubmit="return check();">
                   <table style="color:#060">
                   <tr><td>Name</td><td>&nbsp;</td><td><input type="text" name="t1" id="t1" required class="btn btn-primary px-5 py-3"></td></tr>
                   <tr><td>&nbsp;</td></tr>
                   <tr><td>Address</td><td>&nbsp;</td><td><textarea name="t2" required class="btn btn-primary px-5 py-3"></textarea></td></tr>
                   <tr><td>&nbsp;</td></tr>
                   <tr><td>Gender</td><td>&nbsp;</td><td><input type="radio" name="t3" value="male">Male<input type="radio" name="t3" value="female">Female</td></tr>
                   <tr><td>&nbsp;</td></tr>
                   <tr><td>Phone Number</td><td>&nbsp;</td><td><input type="text" name="t4" maxlength="10" minlength="10" id="t4" class="btn btn-primary px-5 py-3" required></td></tr>
                   <tr><td>&nbsp;</td></tr>
                   <tr><td>Email-id</td><td>&nbsp;</td><td><input type="email" name="t5" required="yes" class="btn btn-primary px-5 py-3"></td></tr>
                   <tr><td>&nbsp;</td></tr>
                   <tr><td>Password</td><td>&nbsp;</td><td><input type="password" name="t6" required class="btn btn-primary px-5 py-3"></td></tr>
                   <tr><td>&nbsp;</td></tr>
                   <tr><td align="center" colspan="2"><input type="submit" value="REGISTER" class="btn btn-primary px-5 py-3"></td></tr> 
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
<script type="text/javascript">
var letters=/^[a-z A-Z]+$/;
var numbers=/^[0-9]+$/;
function check()
{
	if(!document.getElementById("t1").value.match(letters))
	{
		alert("Please input alphabets only for name");
		return false;
	}
	else if(!document.getElementById("t4").value.match(numbers))
	{
		alert("Please input digits only for phone number");
		return false;
	}
	else
	{
		return true;
	}
}
</script>