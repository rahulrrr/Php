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
<script>
    function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 
</script>
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
         <h3>Change password</h3>
      </div>

    <div class="col-lg-12 text-center">
    <div class="col-lg-3 text-center">
    </div>
    <div class="col-lg-5 text-center">
  <?php 
  if(isset($_POST['s1']))
  {
    extract($_POST);
    //Checking password match
    if($newpword==$cnewpword){
      //Checking answer is corect or not
      $qry1=mysql_query("select * from users where  username='$name' AND useremail ='$email'");
      $n1=mysql_num_rows($qry1);
      if($n1>0)
          {
            $qry2=mysql_query("update users set userpass='$newpword' where useremail='$email' ");
            if($qry2){
          ?>
          <div class="row">
          <div class="col-md-10">
          <div class="row pad20">
          <?php
            echo '<script type="text/javascript">'; 
echo 'alert("Successfully changed");'; 
echo 'window.location = "index.php";';
echo '</script>';
          ?>
          </div>
          </div>
          </div>
        <?php
          }
          else
          {
            echo mysql_error();
          }
            
          }
  else{
  ?>
          <div class="row">
          <div class="col-md-10">
          <div class="row pad20">
          <label class="col-lg-12 col-xs-12 mtop10 mleft20" style="background:red;color:yellow;">Sorry your answer is incorrect<span></span> </label>
          </div>
          </div>
          </div>
          <?php 
      }
      
      
      }
      else{?>
          <div class="row">
          <div class="col-md-6">
          <div class="row pad20">
          <label class="col-md-12 col-xs-12 mtop10 mleft20" style="background:red;color:yellow;">Password Dont match<span></span> </label>
          </div>
          </div>
          </div>
      <?php }
      }
    ?>
            <!--Form -->
            <form name="passChange" id="passChange" method="post" action="" >
              <div class="row">
                <div class="col-lg-12">
                  <div class="row pad20">
                    
                    <input type="hidden" class="form-control" class="col-lg-12 col-xs-12 mtop10" placeholder="Your name?" name="name" value="<?php echo $userRow['username'];?>" autocomplete="off" autofocus required />
                  </div>
                </div>
              </div><br/>
              
              <div class="row">
                <div class="col-lg-12">
                  <div class="row pad20">
                    <input type="text" class="form-control" class="col-lg-12 col-xs-12 mtop10" placeholder="Enter Your Mail ID" name="email" autocomplete="off" required />
                  </div>
                </div>  
              </div> <br/>
              <div class="row">
                <div class="col-md-12">
                  <div class="row pad20">
                    
                    <input type="password" class="form-control" class="col-md-12 col-xs-12 mtop10" name="newpword" id="pass1" placeholder="New Password" autocomplete="off"   required />
                  </div>
                </div>
              </div><br/>
              <div class="row">
                <div class="col-md-12">
                  <div class="row pad20">
                    
                    <input type="password" class="form-control" class="col-md-12 col-xs-12 mtop10" name="cnewpword"  id="pass2" onkeyup="checkPass();" placeholder="Confirm New Password"
                    autofocus required/>
                  </div> <span id="confirmMessage" class="confirmMessage"></span>
                </div>
              </div> <br/>
              
              <div class="row">
                <div class="col-md-10">
                  <div class="row pad20">
                    <input type="submit" name="s1" value="Change Password" class="btn btn-primary btn-add mtop10  col-md-5"> 
                      
                    <input type="reset" name="s2" value="Clear All Data" class="btn btn-danger btn-add mtop10 mleft20 col-md-5"> 
                    <a href='home.php'>Back</a>
                  </div>
                  
                </div>
              </div>
              </div>
            </div>
            
            </form>
    </div>
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
 width: 100%;
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