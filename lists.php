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
							<?php

		if($_GET['type']){

			echo"
					<div data-pagination='.swiper-pagination' data-paginationHide='true' class='swiper-container swiper-init ks-demo-slider'>
      <div class='swiper-pagination'></div>
      <div class='swiper-wrapper'>
        <div class='swiper-slide'><img height='100%' width='100%' src='img/editorial.jpg'/> </div>
        <div class='swiper-slide'><img  height='100%' width='100%' src='shops/spar.png'/></div>
        
		</div>	"; }

	
	?>	
	
			<h1>Your Shopping Lists  </h1>
       <?php
	   $newmember = $_GET['success'];
	   $ty = $_GET['type'];
	   				if($ty){
							 echo" <!--- <form id='demoform-1' class='store-data list-block' action='join.php' method='POST'>
      <ul>
        <li>
          <div class='item-content'>
            <div class='item-media'><i class='icon material-icons'>person_outline</i></div>
            <div class='item-inner'> 
              <div class='item-title label'>Store location</div>
              <div class='item-input'>
                <input type='text' placeholder='Store Location' name='name'/>
              </div>
            </div>
          </div>
		            <div class='item-content'>
            <div class='item-media'><i class='icon material-icons'>person_outline</i></div>
            <div class='item-inner'> 
              <div class='item-title label'></div>
              <div class='item-input'>
                <input type='text' placeholder='Username' name='username'/>
              </div>
            </div>
          </div>
        </li>
  
   
		 <p class='item-title label'>Region</p>
              <div class='item-input'>
                <select name='type' class='item-link smart-select'>
                  <option name='type'  value='smartshopper'>Smart Shopper</option>
                  <option name='type' value='shop'>Shop</option>
                </select>
              </div>
      </ul>
	       <div class='content-block'> --->
		 ";
	//echo"<input name='image' type='hidden' value='userfiles/avatars/default.png' />	";

			$strings = ",";
		$u = array('pink','teal', 'blue','#0c56ac');

		$well = $u[rand(0,4)];

    echo"<!--- <p class='buttons-row'>	<input type='submit' class='button button-fill ' name='btn' value='Save' style='background-color:$well' ></p>
	   
    </div>
	  
    </form> --->";
								
											}
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
			       <li><a href='list.php?listid=$ids' class='item-link item-content'>
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
				
				<h1>Public Lists (Top 10) </h1>
  <div class="list-block media-list">
      <ul>
	        
		<?php

		include "connect.php";
		
					if($next) {
							 $queryfor =" SELECT  id,post,image,timestamp,type,title,title2,category
                              FROM posts
 
						 ORDER BY timestamp ASC  LIMIT  10

                             ";	
							 $query=mysqli_query($conn, $queryfor) or die(mysql_error());
							 }else{
		$queryfor = "SELECT id,description,user_id,timestamp,name
                              FROM lists 
                      

					 ORDER BY id DESC  LIMIT  8

                             ";	
							 	 $query=mysqli_query($conn, $queryfor) or die(mysql_error());
							 }
				
		
		mysqli_close($conn);
		
		
		while ($row = mysqli_fetch_assoc($query)) {
	

			
	
	
		
		$description = $row['description'];
		$name = $row['name'];
		$id = $row['id'];
		$uid= $row['user_id'];
		$t_time = $row['timestamp'];

  
	

				mysqli_close($conn);	
			
	
		
		

		//Lists rendered from the database

               echo"   
			       <li><a href='list.php?listid=$id' class='item-link item-content'>
            <div class='item-media'><i class='icon f7-icons'>book_fill</i></div>
            <div class='item-inner'>
              <div class='item-title-row'>
                <div class='item-title'>$name</div>
                <div class='item-after'></div>
              </div>
              <div class='item-subtitle'>$description</div>
              <div class='item-text'></div>
            </div></a></li>

			
             "; 	}?>
	  
  
			
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