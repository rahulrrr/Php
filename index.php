
<?php
    ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // it will never let you open index(login) page if session is set
  if ( isset($_SESSION['user'])!="" ) {
    header("Location: home.php");
    exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Banking</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Online banking System</a>
        </div>
        <div id="navbar" class="navbar-collapse ">
          <ul class="nav navbar-nav">
            <li ><a href="About-Us.php">About Us</a></li>
            <li><a href="Contact-Us.php">Contact Us</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right" style="background-color:#d71920;padding:11px;">
          <a href="login-img.php" style="color:#fff;">
          <span class="glyphicon glyphicon-user" style="border-radius: 50% 50%;border: 2px solid #fff;
color:#fff;padding: 5px;"></span>
           Login</a>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">

	
    
    	<div class="page-header">
         <h3>How may we help you today? </h3>
      </div>

    <div class="col-lg-12" style="height:300px;background-image:url(img/gatewayDesktop.jpg);background-size:100% 100%;">     
    </div>
    <div class="col-lg-12">
      <div class="col-lg-12">
          <h3>Online banking</h3>
          <p> Online banking, also known as internet banking, e-banking or virtual banking, is an electronic payment system that enables customers of a bank or other financial institution to conduct a range of financial transactions through the financial institution's website. The online banking system will typically connect to or be part of the core banking system operated by a bank and is in contrast to branch banking which was the traditional way customers accessed banking services.  
          </p>
      </div>        
      
    </div>
    <div></div>
</div>
<div class="col-lg-12">
<div class="col-lg-4">
          <h3>Internet Banking Services</h3>
          <p> Online banking, also known as internet banking services.  Thay are,
                <ul>
                  <li>  View Account Details/Balance</li>
                  <li>  Download Account Statement</li>
                  <li> View Credit Card Details</li>
                </ul>
          </p>
      </div>        
      <div class="col-lg-4">
          <h3>Fund Transfer</h3>
          <p> Electronic funds transfer (EFT) is the electronic transfer of money from one bank account to another, either within a single financial institution or across multiple institutions, via computer-based systems, without the direct intervention of bank staff. 
          </p>
      </div>     
      <div class="col-lg-4">
          <h3>Online banking</h3>
          <p> Online banking, also known as internet banking, e-banking or virtual banking, is an electronic payment system that enables customers of a bank or other financial institution to conduct a range of financial transactions through the financial institution's website. The online banking system will typically connect to or be part of the core banking system operated by a bank and is in contrast to branch banking which was the traditional way customers accessed banking services.  
          </p>
      </div>    
</div>

    <footer class="navbar-fixed-bottom top-buffer" style="background-image:url(img/border.png);background-size:100% 100%;height:60px;margin-top:40px !important;"> 
    </footer>
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>


<style type="text/css">
	.navbar-default .navbar-nav > .active > a{
		background-color:#0062a8;
		color: #fff;
	}
  .col-lg-4{
    padding: 30px;
  }
</style>