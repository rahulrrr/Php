<?php
include_once 'dbconnect.php';
if(isset($_POST['btn-upload']))
{    
	$file = $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	// $new_file_name = strtolower($file);

	$new_file_name = base64_encode($file);  // encrypt the image ...

	//$new_file_name = rtrim($file);  var_dump($decrypted); //Decrypt the image

	$final_file = $new_file_name;
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		?>
		<script>
		alert('ok');
        window.location.href='register-pass.php?name=<?php echo $final_file; ?>';
        </script>
		<?php

	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='home.php?fail';
        </script>
		<?php
	}
}
echo mysql_error();
?>


