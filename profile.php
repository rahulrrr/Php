
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
            <li class=""><a href="About-Us.php">About Us</a></li>
            <li><a href="Contact-Us.php">Contact Us</a></li>
            
            
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">

	
    
    	<div class="page-header">
         <h3>Profile Details</h3>
      </div>

    <div class="col-lg-12 text-center">
      
<?php
echo "<table >";
echo "<tr><td>Account No </td><td>".$userRow['user_account_no']."</td></tr>";
echo "<tr><td>Name </td><td>".$userRow['username']."</td></tr>";
echo "<tr><td>dob </td><td>".$userRow['dob']."</td></tr>";
echo "<tr><td>Email </td><td>".$userRow['userEmail']."</td></tr>";
echo "<tr><td>Joing Date </td><td>".$userRow['account_reg_date']."</td></tr>";
echo "<tr><td>Pan no </td><td>".$userRow['pan_no']."</td></tr>";
echo "<tr><td>Address</td><td>".$userRow['address']."</td></tr>";
echo "<tr><td>pin</td><td>".$userRow['pin']."</td></tr></table>";
?>
<a href='home.php'>Back</a>
<!-- <a href="profil-export.php">Export</a> -->
</table>
    </div>
    <div></div>
</div>
<div class="col-lg-12">

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

  table {
 font-family: verdana,arial,sans-serif;
 font-size:11px;
 color:#333333;
 border-width: 1px;
 border-color: #666666;
 border-collapse: collapse;
 border:1px solid #666666;
}
table th {
 border-width: 1px;
 padding: 8px;
 border-style: solid;
 border-color: #666666;
 background-color: #dedede;
 width: 10%;
}
table td {
 border-width: 2px;
 padding: 8px;
 border-style: solid;
 border-color: #666666;
 padding: 9PX;
 text-align: center;
 background-color: #ffffff;
 width: 10%;
}
</style>