<?php ob_start(); 
error_reporting(1);
?>
<?php
include"sessions.php"; 
session_start();
$user_id = $_SESSION['user_id'];
?>
<?php
 //if(!$user_id){
  // header("location: index.php");
 // exit;
// }
?>

<?php

//Initialize Values

require_once('php/php_image_magician.php');
$userid = $_SESSION['user_id'];
$src = NULL;
$ext = "";
$product = $_POST['product'];
//Based upon file, convert for use in database
if (($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg"))
{
	$ext = "jpg";
	$src = imagecreatefromjpeg($_FILES['file']['tmp_name']);
}
else if ($_FILES["file"]["type"] == "image/png")
{
	$ext = "png";
	$src = imagecreatefrompng($_FILES['file']['tmp_name']);
}
else if ($_FILES["file"]["type"] == "image/gif")
{
	$ext = "gif";
	$src = imagecreatefromgif($_FILES['file']['tmp_name']);
}


//Make sure it was a valid file, if not complain. 
if ((($ext == "jpg") || ($ext == "png") || ($ext == "gif")) && ($_FILES["file"]["size"] < 5000000))
  {
  	
  	//Check for errors, make sure upload worked
  	if ($_FILES["file"]["error"] > 0)
    	{
		$post_wid =$_POST[username];
	   $success = 'success';
		header("location: submit.php?name=$post_wid&successs=$success");
		exit();
    	}
 	 else
    	{
    	//Check image size
    	list($width,$height)=getimagesize($_FILES["file"]["tmp_name"]);
    	if ($width > 420)
    	{
    	
    	//Resize image
    	$newwidth=300;
		$newheight=($height/$width)*$newwidth;
		$tmp = imagecreatetruecolor($newwidth, $newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$width = $newwidth;
		$height = $height;
		$oldsrc = $src;
		$src = $tmp;
		$ext="jpg";
		imagedestroy($oldsrc);
		}
    

		
		//Get pic info and upload pic to server
		$RandoNum = "cart";
		$RandomNum = rand(0, 9999999999);
		$nameof = "$RandoNum-$RandomNum-$userid";
		
		$picid = $nameof;
		$picturelocation = "files/im/$picid.$ext";
	
		//move pic
		move_uploaded_file($_FILES["file"]["tmp_name"],
      "$picturelocation");
	  

      	if($ext==gif){
		
		
		
		}else{
		     	$magicianObj = new imageLib($picturelocation);


				$magicianObj -> resizeImage(460,460, 'portrait', true);
	
   
		$magicianObj -> saveImage($picturelocation, 65);
		
		}
		
		
      	//Product variables,shops and prices variables
		$nt = $_POST['content'];
		$typee = $_POST['type'];
		$title = $_POST['brand'];
		$title2 = $_POST['price'];
		$shop = $_POST['shop'];
		//
		$title22 = $_POST['price2'];
		$shop2 = $_POST['shop2'];
		//
		$title223 = $_POST['price3'];
		$shop23 = $_POST['shop3'];
		//
		$title224 = $_POST['price4'];
		$shop24 = $_POST['shop4'];
		
		
		 $sections  =  $_POST['quantity']; 
		$timestamp = time();
		$timestap = time();

		include"connect.php";

			
	 //If all shops filled out
		if($shop24){
			$sql1="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title224','$sections','$product','$shop24')";
					$sqls1q=mysqli_query($conn, $sql1) or die(mysql_error());
					
										$sql12="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title223','$sections','$product','$shop23')";
			$sqls1w=mysqli_query($conn, $sql12) or die(mysql_error());
			
						$sql12q="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title22','$sections','$product','$shop2')";
			$sqls122=mysqli_query($conn, $sql12q) or die(mysql_error());
			
							$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
						$sqls=mysqli_query($conn, $sql) or die(mysql_error());
					
			}elseif($shop23){
				//Else if 3 shops filled out
					$sql12="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title223','$sections','$product','$shop23')";
			$sqls1w=mysqli_query($conn, $sql12) or die(mysql_error());
			
			
			
					$sql12q="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title22','$sections','$product','$shop2')";
			$sqls122=mysqli_query($conn, $sql12q) or die(mysql_error());
			
							$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
						$sqls=mysqli_query($conn, $sql) or die(mysql_error());
			
			
			
		}elseif($shop22){
			
			//Else if 2 shops filled out
					$sql12q="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title22','$sections','$product','$shop2')";
			$sqls122=mysqli_query($conn, $sql12q) or die(mysql_error());
			
							$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
						$sqls=mysqli_query($conn, $sql) or die(mysql_error());
			
		}else($shop){
						$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
						$sqls=mysqli_query($conn, $sql) or die(mysql_error());
		}



		
	   $success = 'success';
header("location: submit.php?pass=$name&process=$success&pull=$pp");
exit();
      } 
		}elseif($product){
			
	
  //If all shops filled out
		if($shop24){
			$sql1="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title224','$sections','$product','$shop24')";
					$sqls1q=mysqli_query($conn, $sql1) or die(mysql_error());
					
										$sql12="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title223','$sections','$product','$shop23')";
			$sqls1w=mysqli_query($conn, $sql12) or die(mysql_error());
			
						$sql12q="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title22','$sections','$product','$shop2')";
			$sqls122=mysqli_query($conn, $sql12q) or die(mysql_error());
			
							$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
						$sqls=mysqli_query($conn, $sql) or die(mysql_error());
					
			}elseif($shop23){
				//Else if 3 shops filled out
					$sql12="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title223','$sections','$product','$shop23')";
			$sqls1w=mysqli_query($conn, $sql12) or die(mysql_error());
			
			
			
					$sql12q="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title22','$sections','$product','$shop2')";
			$sqls122=mysqli_query($conn, $sql12q) or die(mysql_error());
			
							$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
						$sqls=mysqli_query($conn, $sql) or die(mysql_error());
			
			
			
		}elseif($shop22){
			
			//Else if 2 shops filled out
					$sql12q="INSERT INTO posts(user_id,post,image,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$picturelocation','$timestamp','$ext','$title','$title22','$sections','$product','$shop2')";
			$sqls122=mysqli_query($conn, $sql12q) or die(mysql_error());
			
							$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
						$sqls=mysqli_query($conn, $sql) or die(mysql_error());
			
		}else($shop){
						$sql="INSERT INTO posts(user_id,post,timestamp,type,brand,price,quantity,product,shop)
			VALUES
				('$user_id','$nt','$timestamp','$ext','$title','$title2','$sections','$product','$shop')";
						$sqls=mysqli_query($conn, $sql) or die(mysql_error());
		}
			

			
	
		
		
					
			

			
		}
		
else
	{
	$post_wid =$_POST[username];
	   $succes = 'succes';
header("location: submit.php?username=$post_wid&successs=$succes");
exit();
	}
?>
<?php ob_end_flush();?>