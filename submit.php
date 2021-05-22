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
					 <div class="navbar bg-indigo">
    <div class="navbar-inner">
      <div class="left"><a href="index.php" class="back link icon-only"><i class="icon icon-back"></i></a></div>
      <div class="center">Carti</div>
      <div class="right"><a href="#" class="link open-panel icon-only"><i class="icon icon-bars"></i></a></div>
    </div>
  </div>								
								

										<div class="panel-overlay"></div>
 
							  <!-- Left Panel with Reveal effect -->
						
					<?php include"menu.php"; ?>

								
						<div class="page-content">
	  	<?php
				
				$next= $_GET[more];
				$sc= $_GET[process];
				$duplicate= $_GET[success];
				
				
				 if($duplicate){
       
   	echo "
		<div class='list-block media-list'>
							  <ul>
					
							
													<li>
										   <div class='content-block'>
      <p class='buttons-row'><i class='icon f7-icons'>paper</i><a href='#' class='button button-fill button-raised' style='background-color:teal' >You have already published that!</a></p>
    </div>
								</li>		
							  </ul>
							</div>	
	
	";	} 	
		
    if($sc){
       
   	echo "
	<div class='list-block media-list'>
							  <ul>
					
							
													<li>
										   <div class='content-block'>
      <p class='buttons-row'><i class='icon f7-icons'>paper_fill</i><a href='#' class='button button-fill button-raised' style='background-color:teal' >Successfully Published!</a></p>
    </div>
								</li>		
							  </ul>
							</div>	



			
	
	
	";	} ?>	
		
		
		

  <form id="demoform-1" class="store-data list-block" enctype='multipart/form-data' role='form' action='save.php' method='POST'>
      <ul>
        <li>
          <div class="item-content">
            <div class="item-media"><i class="icon f7-icons">tags</i></div>
            <div class="item-inner"> 
              <div class="item-title label">Product</div>
              <div class="item-input">
                <input type="text" placeholder="Product" name="product"/>
              </div>
            </div>
          </div>
		
        </li>
		      <li>
          <div class="item-content">
            <div class="item-media"><i class="icon f7-icons">layers_fill</i></div>
            <div class="item-inner"> 
              <div class="item-title label">Quantity</div>
              <div class="item-input">
                <input type="text" placeholder="Quantity" name="quantity"/>
              </div>
            </div>
          </div>
		
        </li>
		 <li>
          <div class="item-content">
            <div class="item-media"><i class="icon f7-icons">home</i></div>
            <div class="item-inner"> 
              <div class="item-title label">Brand name</div>
              <div class="item-input">
                <input type="text" placeholder="Brand name" name="brand"/>
              </div>
            </div>
          </div>
		
        </li>
          <li>
          <div class="item-content">
            <div class="item-media"><i class="icon f7-icons">tags</i></div>
            <div class="item-inner"> 
              <div class="item-title label">Price (R)</div>
              <div class="item-input">
                <input  placeholder="Price" name="price"/>
              </div>
            </div>
          </div>
        </li>
		
		          <li>
          <div class="item-content">
            <div class="item-media"><i class="icon f7-icons">home_fill</i></div>
            <div class="item-inner"> 
              <div class="item-title label">Shop</div>
              <div class="item-input">
                <input  placeholder="Shop" name="shop"/>
              </div>
            </div>
          </div>
        </li>
		 <li>
        <div class="item-content">
            <div class="item-media"><i class="icon f7-icons">camera_fill</i></div>
            <div class="item-inner"> 
              <div class="item-title label">image</div>
              <div class="item-input">
				<input name="file" type="file" id="file" size="24"> 
              </div>
            </div>
          </div>
			</li>
				 <li>
        <div class="item-content">
            <div class="item-media"><i class="icon f7-icons">chat_fill</i></div>
            <div class="item-inner"> 
              <div class="item-title label">Description</div>
              <div class="item-input">
				   <input type="text" placeholder="Description" name="content"/> 
              </div>
            </div>
          </div>
			</li>

			 <li><a href='#' class='item-link smart-select'>
            <select name='sale'>
              <option value='special'>Special</option>
              <option value='sale'>Sale</option>
            <option value='normal'>Normal</option>
            </select>
            <div class='item-content'>
              <div class='item-inner'>
             <div class='item-title'>Choose Type Of Pricing</div>
              </div>
            </div></a></li>

			</ul>
			<div class="content-block">
			<p class="buttons-row"><button class="button button-fill color-teal button-raised" type="submit" name="submit" >Submit</button></p>
			</div>
	  
    </form>		
							
							
							
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