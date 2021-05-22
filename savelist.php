<?php ob_start(); 

?>
<?php 
session_start();
$user_id = $_SESSION['user_id'];

?>
<?php  


  	//Product variables
		$nt = $_POST['description'];
		$name = $_POST['name'];
		$timestamp = time();
		$timestap = time();

		include"connect.php";
		$not="INSERT INTO lists(user_id,description,name, timestamp) 
						 VALUES ('$user_id','$nt','$name','$timestamp')
						";
						mysqli_query($conn,$not) or die(mysql_error());

			
				$success = 'success';
				header("location: lists.php?process=$success&pull=$pp");
						exit();

?><? ob_end_flush(); ?>