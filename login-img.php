
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - Online Banking</title>
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
            <li ><a href="About-Us.php">About Us</a></li>
            <li><a href="Contact-Us.php">Contact Us</a></li>
            
          </ul>
          <!-- <ul class="nav navbar-nav navbar-right" style="background-color:#d71920;padding:11px;">
          <a href="login-img.php" style="color:#fff;">
          <span class="glyphicon glyphicon-user" style="border-radius: 50% 50%;border: 2px solid #fff;
color:#fff;padding: 5px;"></span>
           Login</a>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">

   	<div class="page-header">
      <h3>Login Image</h3>
    </div>

    <div class="col-lg-12" style="height:400px;background-image:url(img/back.jpg);background-size:100% 100%;">
        <div class="col-lg-12 text-center ">
        <table class="col-lg-3">
        	
        </table>
           <table class="col-lg-5">
           	<tr>
           		<th><form action="login.php" method="get" enctype="multipart/form-data"></th>
           		<th>
           		<div class="blah"><img id="blah" style="" alt="your image" height="200" width="500"></div>
           		<input type="file" name="name" style="width:80px;" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" >

           		<button type="submit" name="btn-upload">Login</button>
           		
  			</form>
           	</tr>
           </table> 
  				
  				
  				
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
	table{

	}
	table tr th{

	}
	.blah{
		width: 500px; 
		height:200px;
		border:1px solid #000;
	}
</style>