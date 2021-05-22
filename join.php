<?php ob_start(); ?>
<?php include"sessions.php"; 
$path =$_COOKIE['path'];
?>
<?php session_start();
$user_id = $_SESSION['user_id'];
?>	 		 <?php

 	 if($user_id){
	header("location: index.php");
	exit;
				}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>Carti</title>
		 <!-- Path to Framework7 Library CSS-->
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/framework7.material.min.css">
		<link rel="stylesheet" href="css/framework7.material.colors.min.css">
		<!-- Path to your custom app styles-->
		<link rel="stylesheet" href="css/my-app.css">	
		
    </head>
    <body>
		
		<div class="views">
			<div class="view view-main">
				<div class="pages navbar-fixed toolbar-fixed">
					<div class="page" data-page="index">
				<div class="navbar " style="background-color:#0c56ac" >
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
      <div class="center">Join Carti</div>
      <div class="right"><a href="#" class="link open-panel icon-only"><i class="icon icon-bars"></i></a></div>
    </div>
  </div>									
								 <?php
				
				$username = $_POST['username'];
       $name = $_POST['name'];
if($_POST['btn']){
  if($_POST['username']!="" && $_POST['password']!="" ){

	  include 'connect.php';

		$type = $_POST['type'];
       $email = strtolower($_POST['email']);
	   $image = strtolower($_POST['image']);
	   				  $timestamp = time();
   $client= getenv('HTTP_USER_AGENT');  //will output what web browser is currently viewing the page
//	$REMOTE_ADDR 
	   $ip = $_SERVER['REMOTE_ADDR'];
	   
      $queryaw = "SELECT username 
                            FROM users 
                            WHERE username='$username'
                            ";
							$query=mysqli_query($conn, $queryaw) ;
      mysqli_close($conn);
      if(!(mysqli_num_rows($query)>=1)){        
          $password = md5($_POST['password']);
          include 'connect.php';
        $user="INSERT INTO users(username,name,email,timestamp, password,type) 
                       VALUES ('$username','$name','$email', '$timestamp', '$password','$type')
                      ";
	mysqli_query($conn, $user) or die(mysql_error());
		$queryyq = "SELECT id,password,username
                          FROM users 
                          WHERE username='$username'
                          ";
		
						$queryy=mysqli_query($conn, $queryyq) ; 
    mysqli_close($conn);
      $row = mysqli_fetch_assoc($queryy);
  
       $user = $row['id'];
	   
	    $gwan = $user*2000;
	   
     
	

	   session_start();
	 setcookie("img", "$images", time()+86400);
	 setcookie("path", "$gwan", time()+3600*24*365);
	
   setcookie("type", "$type", time()+3600*24*365);
	 
    $_SESSION['user_id'] = $row['id'];
	$_SESSION['last_active'] = time();
    $_SESSION['facebook'] = $row['facebook'];
 
		 
	
 
		if($type==shop){
			   header("location: lists.php?success=welcome&type=shop");
        exit;
			
		}else{
			
			   header("location: lists.php?success=welcome");
        exit;
			
		}
     
   
      }
      else{
        $error_msg="Username already taken !";
      }

  }
  else{
      $error_msg="All fields must be filled out";
  }
}

		
				

?>					
						<div class="page-content">
						<?php include"signup-form.php"; ?>
		 <div class="content-block">
      <p class="buttons-row"><i class="icon f7-icons">social_facebook_fill</i><a href="f.php" class="button button-fill  button-raised" style="background-color:#1a4e95">Facebook Connect</a></p>
    </div>
					
						</div>								
					</div>								
				</div>					
			</div>
		</div>
		
		

    </body>
</html>