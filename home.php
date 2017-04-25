<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE user_account_no =".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
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
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="About-Us.php">About Us</a></li>
            <li><a href="Contact-Us.php">Contact Us</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right" style="background-color:#d71920;color:#fff;">
            
            <li class="dropdown">
              <a href="#" style="background-color:#d71920;color:#fff;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">

  
<!--     
      <div class="page-header">
      <h3>How may we help you today? </h3>
      </div> -->

    <div class="col-lg-12" style="background-image:url(img/gatewayDesktop.jpg);background-size:100% 100%;">
        <div class="col-lg-12">
            <div class="col-lg-3" style="padding-top:10px;">
            <a href="profile.php">
            <div class="account" >
                  <h3>Account Details</h3>
            </div>
            </a>
            </div>  
            <div class="col-lg-5" style="padding-top:10px;">
          
            </div>
            <div class="col-lg-3" style="padding-top:10px;">
            <a href=Edit-profile.php>
            <div class="account" >
                  <h3>Edit Profile</h3>
            </div>
            </a>
            </div>
        </div>
        <div class="col-lg-12">
            
          
            <div class="col-lg-3" style="padding-top:10px;">
            <a href="Fund-details.php">
            <div class="account" >
                  <h3>Fund Details</h3>
            </div>
            </a>
            </div>

              <div class="col-lg-5" style="padding-top:10px;">
          
            </div>

            <div class="col-lg-3" style="padding-top:10px;">
            <a href="change-pass.php">
            <div class="account" >
                  <h3>Change Password</h3>
            </div>
            </a>
            </div>  
        </div>
        </div>
        </div>
        
    </div>


    <footer class="navbar-fixed-bottom text-center top-buffer" style="background-image:url(img/border.png);background-size:100% 100%;height:60px;margin-top:40px !important;"> 
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
</style>