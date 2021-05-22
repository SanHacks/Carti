<?php ob_start(); ?>
<?php 
session_start();
$user_id = $_SESSION['user_id'];
?>
<?php include"sessions.php"; 
		$page="allowed";
	
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="theme-color" content="#2196f3">
  <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
  <title>Carti</title>
  <link rel="stylesheet" href="css/framework7.material.min.css">
  <link rel="stylesheet" href="css/my-app.css">
  <link rel="apple-touch-icon" href="img/f7-icon-square.png">
  <link rel="icon" href="img/f7-icon.png">
</head>
    <body>
		
		<div class="views">
			<div class="view view-main">
				<div class="pages navbar-fixed toolbar-fixed">
					<div class="page" data-page="index">
					 <div class="navbar" style="background-color:#8ec630">
    <div class="navbar-inner">
      <div class="left"><a href="index.php" class="back link icon-only"><i class="icon icon-back"></i></a></div>
      <div class="center">Carti</div>
      <div class="right"><a href="#" class="link open-panel icon-only"><i class="icon icon-bars"></i></a></div>
    </div>
  </div>								
								

										<div class="panel-overlay"></div>
 
							  <!-- Left Panel with Reveal effect -->
			<?php include"top.php"; ?>
  
				<?php include"menu.php"; ?>


								
						<div class="page-content">
			<h1>Your Shopping Lists  </h1>
       <?php
	   $pullproduct = $_GET['id'];
	   $newmember = $_GET['success'];
											if($newmember){
								echo"	<li>
										   <div class='content-block'>
      <p class='buttons-row'><i class='icon f7-icons'>book_fill</i><a href='create.php' class='button button-fill button-raised' style='background-color:teal' >Welcome to Carti</a></p>
	   <p class='buttons-row'><i class='icon f7-icons'>book_fill</i><a href='create.php' class='button button-fill button-raised' style='background-color:blue' >Start Saving Today</a></p>
	    <p class='buttons-row'><i class='icon f7-icons'>book_fill</i><a href='create.php' class='button button-fill button-raised' style='background-color:red' >One List Always Up-date</a></p>
    </div>
								</li>";
								
											}
	   
	   
   	echo "
	<div class='list-block media-list'>
							  <ul>
					
							
											<li>
										   <div class='content-block'>
      <p class='buttons-row'><i class='icon f7-icons'>book_fill</i><a href='create.php' class='button button-fill button-raised' style='background-color:teal' >Create a shopping list!</a></p>
    </div>
								</li>		
							  </ul>
							</div>	"; ?>
							
							  <div class="list-block media-list">
      <ul>
	        
		<?php
	function getTime($t_times){
		$pt = time() - $t_times;
		if ($pt>=86400)
			$p = date("F j ",$t_times);
		elseif ($pt>=3600)
			$p = (floor($pt/3600))."h";
		elseif ($pt>=60)
			$p = (floor($pt/60))."m";
		else 
			$p = $pt."s";
		return $p;
	}	

	
		include "connect.php";
		
					if($nexts) {
							 $queryfor =" SELECT  id,post,image,timestamp,type,title,title2,category,description
                              FROM posts WHERE user_id='$user_id'
 
						 ORDER BY timestamp ASC  LIMIT  10

                             ";	
							 $query=mysqli_query($conn, $queryfor) or die(mysql_error());
							 }else{
		$queryfors = "SELECT id,description,user_id,timestamp,name
                              FROM lists WHERE user_id='$user_id'
                      

					 ORDER BY id DESC  LIMIT  10

                             ";	
							 	 $querys=mysqli_query($conn, $queryfors) or die(mysql_error());
							 }
				
		
		mysqli_close($conn);
		
		
		while ($rows = mysqli_fetch_assoc($querys)) {
	

			
	
	
		
		$descriptions = $row['description'];
		$names = $rows['name'];
		$ids = $rows['id'];
		$uids= $rows['user_id'];
		$t_times = $rows['timestamp'];
		//$times=  getTime($t_times);
  
	

				mysqli_close($conn);	
			
	
		
			

		//Lists rendered from the database

               echo"   
			       <li><a href='add.php?product=$pullproduct&list=$ids' class='item-link item-content'>
            <div class='item-media'><i class='icon f7-icons'>book_fill</i></div>
            <div class='item-inner'>
              <div class='item-title-row'>
                <div class='item-title'>$names</div>
                <div class='item-after'></div>
              </div>
              <div class='item-subtitle'>$descriptions</div>
              <div class='item-text'></div>
            </div></a></li>

			
             "; 	}
			 
			 
			 ?>
	  
  
			
      </ul>
	  
	  
	  
    </div>
				
		
							
							
							
							<!---- Page content ending ----->
						</div>								
					</div>								
				</div>					
			</div>
		</div>
		
		
		 <!-- Path to Framework7 Library JS-->
		<script type="text/javascript" src="js/framework7.min.js"></script>
		<!-- Path to your app js-->
		<script type="text/javascript" src="js/my-app.js"></script>		
        <script type="text/javascript" src="cordova.js"></script>
    </body>
</html>
<?php ob_end_flush(); ?>