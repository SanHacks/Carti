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


								    <div class="card ks-card-header-pic">
      <div  valign="bottom" class="card-header color-white no-border"></div>
	         
			 
			 <div style="background-image:url(img/f7-icon.png)" class="message-avatar"></div>Carti
			 
      <div class="card-content">
	<?php if($_GET['product']!=""){
	$hashtag = $_GET['search'];
	$capacity = $_GET['quantity'];	 			
	$brando = $_GET['brand'];
		include "connect.php";
		
							$productimage = "SELECT id,image
                              FROM posts
                       WHERE product LIKE '%$hashtag%' 
		ORDER BY timestamp DESC 
		LIMIT  1
                             ";
							 $getimage=mysqli_query($conn,$productimage) or die(mysql_error());
			mysqli_close($conn);		
					
		
		
		if(mysqli_num_rows($getimage)>0){
			
		while ($rows = mysqli_fetch_array($getimage)) {

		$proim = $rows['image'];
	$thisone = $rows['product'];
				
			echo"  

								<a href='product.php?pid=$id' data-popup='.demo-popup'>
										
										<img src='$proim' width='100%'/></a>";
     
	 
		}
		}
		}
		?>
      </div>
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
					
	if($_GET['product']!=""){
	$hashtag = $_GET['search'];
	$capacity = $_GET['quantity'];	 	
	$thepro = $_GET['pid'];
	$thisproducts = $_GET['product'];
				 			include "connect.php";
		  $colony ="SELECT id,post,image,timestamp,type,brand,price,quantity,product,shop FROM posts WHERE  brand='$brando' ";
		  $col=mysqli_query($conn, $colony) or die(mysql_error());
							 
							
					 
							 
							 mysqli_close($conn);
				while ($wowW = mysqli_fetch_array($col)) {
			
				$thelistidentification = $wowW['pid'];
				$theid = $wowW['product_id'];
				$identt = $wowW['id'];
				$t_tim = $wowW['timestamp'];
				 
								include "connect.php";

		
								$queryxc = "SELECT id,post,image,timestamp,type,brand,price,quantity,product,shop
                              FROM posts
                       WHERE id='$identt' 
	
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
		 
	if($quant==$sections){
									if($pid=$spar){

						
				  echo"
	  
  
       <tr>
             <a href='shop.php?pid$shop'><a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	
						
							}	
							if($pid=$checker){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
							
								
								//Echo if user marked shop x
									if($pid=$shoprite){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}	
								//Echo if user marked shop x
								if($pid=$choppies){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}	
							//Echo if user marked shop x
											if($pid=$picknpay){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
														if($boxer==$shop){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
							
							
								if(!$spar && !$choppies && !$picknpay && !$checker && !$shoprite){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
		}elseif($quant==Weight){
									if($pid=$spar){

						
				  echo"
	  
  
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	
						
							}	
							if($pid=$checker){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
							
								
								//Echo if user marked shop x
									if($pid=$shoprite){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}	
								//Echo if user marked shop x
								if($pid=$choppies){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}	
							//Echo if user marked shop x
											if($pid=$picknpay){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
									if($boxer==$shop){						
				  echo"
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

													}
							
							
								if(!$spar && !$choppies && !$picknpay && !$checker && !$shoprite){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
								}else{
			if($pid=$spar){
										echo"
	    <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	
						
							}	
			if($pid=$checker){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
							
								
								//Echo if user marked shop x
		if($pid=$shoprite){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

						}	
								//Echo if user marked shop x
		if($pid=$choppies){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}	
							//Echo if user marked shop x
		if($pid=$picknpay){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
		if($boxer==$shop){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
							
							
		if(!$spar && !$choppies && !$picknpay && !$checker && !$shoprite){
	
								
				  echo"
	  
 
       <tr>
             <a href='shop.php?pid$shop'> <td class='label-cell'>$shop</td></a>
              <td class='numeric-cell'>$title2</td>
              <td class='numeric-cell'>$title</td>
              <td class='numeric-cell'>$sections</td>
              <td class='numeric-cell'>$product</td> 
    
             <td class='actions-cell'><a href='savetolists.php?id=$id&product=$product' class='link icon-only'><i class='icon material-icons'>input</i></a>
            </tr><br>";	

							}
		}
	$look = "$thepro";
		     $url = 'http://www.Carti.ga/product.php?pid=' ;
  $via = 'Carti';

				 }	
				 }	
					}	
						
						?>
						   </tbody>
        </table>
			<?php
			echo"
        <div class='row'>
          <a class='link external' href='http://www.facebook.com/sharer.php?u=$url$look&t=$socialtext ' ><div class='col-25'> <i class='icon f7-icons'>social_facebook_fill</i> </div></a>
         <a class='link external' href='http://twitter.com/intent/tweet?url=$url$look&via=$via&text=$socialtext&related=Carti'   >   <div class='col-25'><i class='icon f7-icons'>social_twitter_fill</i></div></a>
          <a  class='link external' href='https://plus.google.com/share?url=$url$look'  > <div class='col-25'><i class='icon f7-icons'>social_googleplus</i></div></a>
          <a class='link external' href='whatsapp://send?text=$what$url$look'> <div class='col-25'><i class='icon f7-icons'>phone_round_fill</i></div></a>
        </div></div></div>

		  ";
			 

	echo"			</div>"; ?>
      </div>
      <div class="card-footer">
	  
	  <a href="order.php" class="link"><i class="icon material-icons">redeem<sup><p>34</p></sup></i></a>
	  <a href="#" class="link"><i class="icon f7-icons">social_facebook_fill</i>1</a>
	  <a href="#" class="link"><i class="icon f7-icons">social_twitter_fill</i></a>
	  <a href="#" class="link"><i class="icon material-icons">favorite_border</i></a>
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