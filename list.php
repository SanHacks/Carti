<?php ob_start(); ?>
<?php 
session_start();
$user_id = $_SESSION['user_id'];
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
						
						
						
						
						
						
						
						
						
						
  				<div class='data-table data-table-init card'>
						<?php
								function getTime($t_time){
		$pt = time() - $t_time;
		if ($pt>=86400)
			$p = date("F j",$t_time);
		elseif ($pt>=3600)
			$p = (floor($pt/3600))."h";
		elseif ($pt>=60)
			$p = (floor($pt/60))."m";
		else 
			$p = $pt."s";
		return $p;
	}
				
				$next= $_GET[more];
				$sc= $_GET[success];
				$duplicate= $_GET[duplicate];
				
				
	
		
    if($sc){
       
   	echo "
	<div class='list-block media-list'>
							  <ul>
					
							
													<li>
										   <div class='content-block'>
      <p class='buttons-row'><i class='icon f7-icons'>paper_fill</i><a href='#' class='button button-fill button-raised' style='background-color:teal' >Successfully Added!</a></p>
    </div>
								</li>		
							  </ul>
							</div>	



			
	
	
	";	} 	
		echo"  

								<a href='product.php?pid=$id' data-popup='.demo-popup'>
										<i class='icon f7-icons'>book_fill</i>
										</a>";
										echo"        <table>
   <thead>
            <tr>
            
              <th class='label-cell'>Shop </th>
              <th class='numeric-cell'>Price</th>
              <th class='numeric-cell'>Brand</th>
              <th class='numeric-cell'>Quantity</th>
             <th class='numeric-cell'>Product</th> 
            
              <th></th>
            </tr>
          </thead>
		  
		  
		       <div class='card-header'>
	 

      </div>
  <div class='card-content'>

          <tbody>
           
		  ";		
					
	if($_GET['listid']!=""){
	$hashtag = $_GET['search'];
	$capacity = $_GET['quantity'];	 	
	$thepro = $_GET['listid'];
	
				 			include "connect.php";
		  $colony ="SELECT id,product_id,listid,timestamp FROM listcontent WHERE listid='$thepro' ORDER BY id  LIMIT 25
				";
						

							 $col=mysqli_query($conn, $colony) or die(mysql_error());
							 
							  $que	= "UPDATE lists
					 SET views = views + 1
					 WHERE id= $thepro  LIMIT 5
					";
					$queryx=mysqli_query($conn, $que) or die(mysql_error());
							 
							 mysqli_close($conn);
				while ($wowW = mysqli_fetch_array($col)) {
			
				$thelistidentification = $wowW['listid'];
				$theid = $wowW['product_id'];
				$identt = $wowW['id'];
				$t_tim = $wowW['timestamp'];
				 
 

	
				
							
	
								include "connect.php";

		
								$queryxc = "SELECT id,post,image,timestamp,type,brand,price,quantity,product,shop
                              FROM posts
                       WHERE id='$theid' 
	
                             ";
							 $query=mysqli_query($conn,$queryxc) or die(mysql_error());
			mysqli_close($conn);		
			
		

		while ($row = mysqli_fetch_assoc($query)) {
		$content = $row['post'];
		$id = $row['id'];
		$socialtext = $row['description'];
		//Product variables
		
		$typee = $row['type'];
		$title = $row['brand'];
		$title2 = $row['price'];
		$product = $row['product'];
		$shop = $row['shop'];
		 $sections  =  $row['quantity']; 
		 
        $uid= $row['user_id'];
		$views = $row['views'];
		$likes = $row['likes'];
		$comments = $row['comments'];
		$imagess = $row['image'];
		$type = $row['type'];
		$userwhoid = $row['user2_id'];
		$tribed = $row['tribe_id'];
		$role= $row['role'];
		$realp= $row['op'];
		$repo= $row['repuser'];
		$value1= $row['value1'];
		$value2= $row['value2'];
		$value1a= $row['value1a'];
		$value2a= $row['value2a'];
		$roles= $row['roles'];
		$t_time = $row['timestamp'];

		$post_id = $row['post_id'];

       $ago=  getTime($t_time);
	   
        	   //This converts everything with @ and # to a clickable link 
	   			   	$content = preg_replace('/@(\\w+)/','
			
			<a href=userprofile.php?username=$1>
			
			$0</a>',$content);
			
			 $content = preg_replace('/#(\\w+)/','
			 
			 <a href=hashtag.php?hashtag=$1>
			 
			 $0</a>',$content);
			 		 //Replace www. with a link https:
			 
		 $content = preg_replace ("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"https://\\2\" target=\"_blank\">\\2</a>", $content);
		 
	include "timeline.php";
	$look = "$thepro";
		     $url = 'http://www.Carti.ga/list.php?pid=' ;
  $via = 'Carti';

				 }	
				

          	
           
						
					}	


						}	
						
						?>
						   </tbody>
        </table>
			<?php
			echo"
	  <div class='list-block accordion-list'>
      <ul>
        <li class='accordion-item'><a href='#' class='item-link item-content'>
       			  <p class='buttons-row'><i class='icon material-icons'>share</i> Share List
			  
			  </p>
			 </a>
          <div class='accordion-item-content'>
            <div class='content-block'>
			   <div class='ks-grid'>
      <div class='content-block'>
        <div class='row'>
          <a class='link external' href='http://www.facebook.com/sharer.php?u=$url$look&t=$socialtext ' ><div class='col-25'> <i class='icon f7-icons'>social_facebook_fill</i> </div></a>
         <a class='link external' href='http://twitter.com/intent/tweet?url=$url$look&via=$via&text=$socialtext&related=hybrd'   >   <div class='col-25'><i class='icon f7-icons'>social_twitter_fill</i></div></a>
          <a  class='link external' href='https://plus.google.com/share?url=$url$look'  > <div class='col-25'><i class='icon f7-icons'>social_googleplus</i></div></a>
          <a class='link external' href='whatsapp://send?text=$what$url$look'> <div class='col-25'><i class='icon f7-icons'>phone_round_fill</i></div></a>
        </div></div></div>

		  </div>
		  </div>
        </li>
  
      </ul>
    </div>";
			 

	echo"			</div>"; ?>
      </div>
	
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