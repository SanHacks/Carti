<?php ob_start(); 

?>

<?php  


		$product = $_GET['product'];
		$list = $_GET['list'];
	
		$timestamp = time();

		include"connect.php";
		$not="INSERT INTO listcontent(product_id,listid,timestamp) 
						 VALUES ('$product','$list','$timestamp')
						";
						mysqli_query($conn,$not) or die(mysql_error());

			
				
				$success = 'success';
				header("location: list.php?process=$success&listid=$list");
						exit();

?><? ob_end_flush(); ?>