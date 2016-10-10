<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title> Gallery </title>
		<meta name="description" content="Blueprint: Background Slideshow" />
		<meta name="keywords" content="blueprint, background image slideshow, fullscreen slideshow, jquery, fullscreen image, web development" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<link href="assets/css/font.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css-full/default.css" />
		<link rel="stylesheet" type="text/css" href="css-full/component.css" />
		<script src="js-full/modernizr.custom.js"></script>
		
		<style>
			.mainbar{margin-top:-1.5%;}
			
			.languages
			{
				top:0%; 
			}
			.navbar-toggle{display:none;}
			@media screen and (max-width:1900px) and (min-width:1850px)
			{
				.mainbar{margin-top:-1%;}
			}
		</style>
		
		<script language="javascript">
			document.onmousedown=disableclick;
		</script>
	</head>
	
	
	<body oncontextmenu="return false">

	 <?php include_once"connection-open.php";
		$q="SELECT * FROM tblprojects WHERE projectId =".$_GET['projectId'];

		if ($result=mysqli_query($conn,$q))
  		{
		  // Fetch one and one row
  		while ($row=mysqli_fetch_row($result))
    	{
    		printf ($row[1]);
    	}
  			// Free result set
		    mysqli_free_result($result);
		}
		?>
		
		
		<?php include_once"menu.php"?>
		
		
		<div class="container">		
			<div class="main">
				<ul id="cbp-bislideshow" class="cbp-bislideshow">
				
				<?php include_once"connection-open.php";
					  $sql = "SELECT projectId, imageName FROM tblimage WHERE projectId = ?" ;
					$stmt = mysqli_prepare($conn, $sql);
					mysqli_stmt_bind_param($stmt, "i", $_GET['projectId']);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$projectId, $imageName);
					$i = 0;
					while (mysqli_stmt_fetch($stmt)) {
						 $resprojectID[$i] = $projectid;
						  $resimageName[$i] = $imageName;
					
						$i++;
					}
					?> 						
					<?php for($j=0;$j<$i;$j++){ ?>
							<li>
								<img src="photogallery/<?php echo $resimageName[$j] ; ?>"/>
							</li>
					<?php }?>
				</ul>
				
				
				<div id="cbp-bicontrols" class="cbp-bicontrols">
					<span class="cbp-biprev"> <span class="prev-span"></span> </span>
					<span class="cbp-bipause" style="display:none;"></span>
					<span class="cbp-binext"> <span class="next-span"></span> </span>
				</div>
			</div>
			
		
		</div>
			
			<div class="cbp-bicontrols2" onclick="goBack()">
				<!-- <img src="images/back.png" style="width:60px;" class="imgback"/> -->
				<span class="gob">
					<p>Go Back </p>					
				</span>
			</div>
			
<!-- 			<div class="back2" onclick="goBack()">
				<span>Go Back</span>
			</div> -->
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- imagesLoaded jQuery plugin by @desandro : https://github.com/desandro/imagesloaded -->
		<script src="js-full/jquery.imagesloaded.min.js"></script>
		<!-- <script src="js-full/cbpBGSlideshow.min.js"></script> -->
		<script src="js-full/cbpBGSlideshow.js"></script>
		<script>
			$(function() {
				cbpBGSlideshow.init();
				//cbpBGSlideshow.stopSlideshow();
			});
			

		</script>
		
		<script>
			function goBack() 
			{
				window.history.back();
			}
		</script>
		
	</body>
</html>