<?php
  require_once 'dbconnect.php';

  $error = false;
  if ( isset($_GET['submit']) ) {
  
  date_default_timezone_set("Asia/Kolkata");
  $date1=date('d-m-Y/h:i:sa');  
  $category = $_GET["category"];
  $subject = $_GET["subject"];
  $name = $_GET['name'];
  $Email = $_GET["Email"];
  $Contact = $_GET["Contact"];
  $inquiry = $_GET["inquiry"];
        // if there's no error, continue to signup
        if( !$error ) {
            
  
            $query = "INSERT INTO `contact`( `date1`, `category`, `subject`, `name`, `Email`, `Contact`, `inquiry`) VALUES ('$date1', '$category', '$subject', '$name','$Email', '$Contact', '$inquiry')";

            $res = mysql_query($query);
                
            if ($res) {
               echo "<script type='text/javascript'>alert('Sucessfully')</script>";
            } else {
                echo mysql_error();

            }           
        }
    }
 ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

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
          <a class="navbar-brand" href="index.php">Online banking System</a>
        </div>
        <div id="navbar" class="navbar-collapse ">
          <ul class="nav navbar-nav">
            <li ><a href="About-Us.php">About Us</a></li>
            <li class="active" style="background-color:#0062a8;"><a href="Contact-Us.php">Contact Us</a></li>
            
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">

	
    
    	<div class="page-header">
         <h3>How may we help you today? </h3>
      </div>

    <div class="col-lg-12" style="height:300px;background-image:url(img/Contacts-Us-Page.png);background-size:100% 100%;">     
    </div>
    <div class="col-lg-12">
      <div class="col-lg-12 text-center">
          <h1>Contact Us</h1>
          <form action='' method='get'>
          <table class=" table col-lg-12 text-center">

            <tr>
              <th>Choose a category: </th>
     
              <th><input class="form-control" type="text" name="category"></th>
            </tr>
            <tr>
              <th>Choose a subject: *</th>
 
              <th><input class="form-control" type="text" name="subject" required>
              </th>
            </tr>
            <tr>  
              <th> Enter your full name: *</th>
  
              <th><input class="form-control" type="text" name="name" required></th>
            </tr>
            <tr>
            <th style="font-size:20px;">Enter your contact details:</th>
            </tr>
            <tr>
              <th>Email Address : *</th>

              <th><input class="form-control" type="text" name="Email"></th>
            </tr>
            <tr>
              <th>Contact Number :</th>
    
              <th><input class="form-control" type="text" name="Contact" required></th>
            </tr>
            <tr>
              <th>Enter your inquiry: *</th>
              <th><input class="form-control" type="text" name="inquiry"></th>
            </tr>
            <tr>
              <th></th>
              <th><input type='submit' style='padding:10px;background-color:#fff;' name='submit' value='Submit'></th>
              <th></th>
            </tr>
          </table>
          </form>
          <h5 style="color:red;">Fields marked with * are mandatory</h5>
      </div>        
      
    </div>
    <div></div>
</div>
<div class="col-lg-12">
<div class="col-lg-8">
          <h3>Place in map</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38080.43660915928!2d80.22149159296664!3d12.922923228439311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525c8cd40b76e7%3A0x681487984b55f7bb!2sKCG+College+of+Technology!5e0!3m2!1sen!2sin!4v1490167083065" width="850" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>     
      <div class="col-lg-4">
          <i class="fa fa-address-card-o" style="font-size:100px;" aria-hidden="true"></i>
          <h1>Condect Address</h1>
          <h3><address>
            KCG College Of Technology,<br>
            Rajiv Gandhi Salai, Karapakkam Chennai - 600097.<br>
            india<br> 
          </address></h3>
          <i class="fa fa-mobile" style="font-size:60px;" aria-hidden="true"></i> : +91 9876543219
          <i class="fa fa-volume-control-phone" style="font-size:60px;" aria-hidden="true"></i>: 0444 6543219<br>
          </b>


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
    border: 1px solid #000;
  }
</style>