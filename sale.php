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
        <div class="left"><a href="
	  <?php				  		
					$from_url = $_SERVER['HTTP_REFERER'];

					if($from_url){		
					echo"$from_url";
								}else{
					echo"index.php";
								 }
								
								?>	
	  
	  " class="back link icon-only"><i class="icon icon-back"></i></a></div>
	  
	  
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
	

	if($_GET['pid']!=""){
	$hashtag = $_GET['search'];
	$capacity = $_GET['quantity'];	 			
	$theshoptolookup = "sale";
		include "connect.php";
		
							$productimage = "SELECT id,image,product
                              FROM posts
                       WHERE shop Like '%$theshoptolookup%' 
		ORDER BY id DESC 
		LIMIT  10
                             ";
							 $getimage=mysqli_query($conn,$productimage) or die(mysql_error());
			mysqli_close($conn);		
					
		
		
		if(mysqli_num_rows($getimage)>0){
			
		while ($rows = mysqli_fetch_array($getimage)) {

		$proim = $rows['image'];
	$getthis = $rows['product'];
				
			echo"  

								<a href='product.php?pid=$id&product=$getthis' data-popup='.demo-popup'>
										
										<img src='$proim' width='100%'/></a>";
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
										
							
           }	
		}
				$shoprite = $_GET['shoprite'];		
				$choppies = $_GET['choppies'];	
				$spar = $_GET['spar'];	
				$picknpay = $_GET['picknpay'];	
				$boxer = $_GET['boxer'];	
				$checker = $_GET['checkers'];
				$order = $_GET['orderby'];
				$quant= $_GET['quantity'];
					include "connect.php";
	
						
	
						$queryxc = "SELECT id,post,image,timestamp,type,brand,price,quantity,product,shop,sale
                              FROM posts
                       WHERE sale Like '%$theshoptolookup%'  
		ORDER BY timestamp DESC 
		LIMIT  30 ";
		

		
                             
							 $query=mysqli_query($conn, $queryxc) or die(mysql_error());
			mysqli_close($conn);		
					
		
		
		if(mysqli_num_rows($query)>0){
		while ($row = mysqli_fetch_array($query)) {
		$content = $row['post'];
		$id = $row['id'];
		//Product variables
		
		$typee = $row['type'];
		$title = $row['brand'];
		$brand=$title;
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
	//Echo if user marked shop x

								

						
				  echo"
	  
  
       <tr>
           <td class='label-cell'><a href='shop.php?pid=$shop'>$shop</a></td>
            <td class='numeric-cell'><a href='product.php?pid=$id&product=$product&brand=$brand'>$title2</a></td>
              <td class='numeric-cell'><a href='product.php?pid=$id&product=$product&brand=$brand'>$title</a></td>
           <td class='numeric-cell'><a href='product.php?pid=$id&product=$product&brand=$brand'>$sections</a></td>
              <td class='numeric-cell'><a href='product.php?pid=$id&product=$product&brand=$brand'>$product</a></td> 
    
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	
						
				
						
				
           
						
					}	
		}	
	}		
						?>
						   </tbody>
        </table>
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