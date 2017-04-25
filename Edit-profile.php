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
            <li class=""><a href="Contact-Us.php">Contact Us</a></li>
            
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">
      <div class="col-lg-12">
        <div class="page-header">
         <h1>Profile Update</h1>
      </div>
      <div class="col-lg-5 text-center">
<form  name="" class="text-center" id="" method="get" action="">

<b>Name </b><input class="form-control" name="username" value=<?php echo $userRow['username']; ?> ><br>
<b>Dob </b>
<input class="form-control" name="dob" value=<?php echo $userRow['dob']; ?> ><br>
<b>Gender </b>
<input class="form-control" name="sex" value=<?php echo $userRow['sex']; ?> ><br>
<b>PAN No </b>
<input class="form-control" name="pan_no" value=<?php echo $userRow['pan_no']; ?> ><br>
<b>Address </b>
<input class="form-control" name="address" value=<?php echo $userRow['address']; ?> ><br>
</div>
<div class="col-lg-5 text-center">
<b>PIN </b>
<input class="form-control" name="pin" value=<?php echo $userRow['pin']; ?> ><br>
<b>Mobile no </b>
<input class="form-control" name="mobilno" value=<?php echo $userRow['mobilno']; ?> ><br>
<b>Email </b>
<input class="form-control" name="userEmail" value=<?php echo $userRow['userEmail']; ?> ><br>
<button type="submit" name="submit" class="btn btn-primary" >Update</button><br><br><br>
<a href="home.php">Back</a>
</div>
<?php
$user_account_no = $userRow['user_account_no'];
           
             if(isset($_GET['submit']))
                { 
                  
                  extract($_GET);
                  $update=mysql_query("update users set username='$username',dob='$dob',sex='$sex',pan_no='$pan_no',address='$address',userEmail='$userEmail',mobilno='$mobilno' where user_account_no='$user_account_no'");
                    // username  dob   sex   pan_no  address   pin   mobilno   userEmail
                  if($update)
                  {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Successfully update");'; 
                    echo 'window.location = "profile.php";';
                    echo '</script>';
                  }
                  else
                  {
                    echo mysql_error();
                  }
                }
            ?>
          </form>
</div>        
      
    </div>
    <div></div>
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




