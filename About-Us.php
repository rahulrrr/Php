<?php
  require_once 'dbconnect.php';

  $error = false;
  if ( isset($_GET['submit']) ) {
  
  date_default_timezone_set("Asia/Kolkata");
  $date1=date('d-m-Y/h:i:sa');  
  $feedback = $_GET["feedback"];


        if( !$error ) {
            
  
            $query = "INSERT INTO `feedback`( `date1`,`feedback`) VALUES ('$date1', '$feedback')";

            $res = mysql_query($query);
                
            if ($res) {
               echo "<script type='text/javascript'>alert('Feedback Sucessfully ')</script>";
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
          <a class="navbar-brand" href="index.php">Online banking System</a>
        </div>
        <div id="navbar" class="navbar-collapse ">
          <ul class="nav navbar-nav">
            <li class="active" style="background-color:#0062a8;"><a href="About-Us.php">About Us</a></li>
            <li><a href="Contact-Us.php">Contact Us</a></li>
            
            
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">

	
    
    	<div class="page-header">
         <h3>About</h3>
      </div>

    <div class="col-lg-12" style="height:300px;background-image:url(img/about.jpg);background-size:100% 100%;">     
    </div>
    <div class="col-lg-12">
      <div class="col-lg-12 text-center">
          <h3>About</h3>
          <p>BANK has been recognized amongst the Top and Fastest Growing Banks in various Indian Banking League Tables by prestigious media houses and Global Advisory Firms, and has received several national and international honours for our various Businesses including Corporate Investment Banking, Treasury, Transaction Banking, and Sustainable practices through Responsible Banking.  BANK is steadily evolving as the Professionals’ Bank of India with the long term mission of “Building the Finest Quality Bank of the World in India” by 2020.  
          </p>
           <form action='' method='get'>
          <h3><b>Feedback</b><br></h3>
          <textarea name="feedback" cols="150" rows="5" required=""></textarea><br><br><br><br><br>
          <input type="submit" name="submit">

      </div>        </form>
      
    </div>
    <div></div>
</div>
<div class="col-lg-12" style="margin-top:40px;">

</div>

    <footer class="navbar-fixed-bottom top-buffer" style="background-image:url(img/border.png);background-size:100% 100%;height:40px;margin-top:90px !important;"> 
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