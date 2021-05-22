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
							  <div class="panel panel-left panel-cover">
								<div class="content-block">
							    <div class="list-block">
      <ul>
        <li>
          <div class="item-content">
            <div class="item-media"><i class="material-icons">whatshot</i></div>
            <div class="item-inner"> 
              <div class="item-title">Hot Topics</div>
              <div class="item-after">CEO</div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-media"><i class="material-icons">supervisor_account
			</i></div>
            <div class="item-inner"> 
              <div class="item-title">Tribes</div>
              <div class="item-after"> <span class="badge">5</span></div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-media"><i class="material-icons">person_add</i></div>
            <div class="item-inner"> 
              <div class="item-title">Bots</div>
            </div>
          </div>
        </li>
	
      </ul>
    </div>
								  <!-- Click on link with "close-panel" class will close panel -->								  
								  <p><a href="#" class="close-panel"><i class="material-icons">wrap_text</i>Close Menu</a></p>
								  
								</div>
							  </div>	
  
						<?php include"menu.php"; ?>


								
						<div class="page-content">


							
							
							
							
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