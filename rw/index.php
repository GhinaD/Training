<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Rola Vincent | HomePage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/font.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
</head>


<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(event)
{
  if(event.button==2)
   {
    /* alert(status);*/
     return false;    
   }
}
</script>


<script language="javascript">
document.onmousedown=disableclick;
</script>


<script language=”JavaScript”>
function disableCtrlKeyCombination(e)
{
//list all CTRL + key combinations you want to disable

var forbiddenKeys = new Array('a', 's', 'c');
var key;
var isCtrl;

if(window.event)
{
key = window.event.keyCode;     //IE
if(window.event.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}
else
{
key = e.which;     //firefox
if(e.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}

//if ctrl is pressed check if other key is in forbidenKeys array
if(isCtrl)
{
for (i = 0; i < forbiddenKeys.length; i++)
{
//case-insensitive comparation
if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
{
//                                    alert(“Key combination CTRL + ”
//                                                + String.fromCharCode(key)
//                                                + ” has been disabled.”);
return false;
}
}
}
return true;
}
</script>
<body oncontextmenu="return false">
	
	<?php include_once"menu.php"?>

	<!-- Page Top Section -->
	<section id="page-top" class="section-style" style="background-image:url(photogallery/home10.jpg);">
		<div class="pattern height-resize">
			<div class="container">
            <!-- <div class="about-height"></div> -->
				<h1 class="site-title">
					<a href="aboutus.php" class="title"> 
						About Us
					</a>
				</h1><!-- /.site-title -->
				
				<!--don't delete it ! -->
				<div id="time_countdown" class="time-count-container" style="display:none;"></div>
				
				<div class="next-section mob-section1 marg-arrow1">
					<a class="go-to-about"><span></span></a>
				</div><!-- /.next-section -->
			</div><!-- /.container -->
		</div><!-- /.pattern -->		
	</section><!-- /#page-top -->
	<!-- Page Top Section  End -->


	<!-- About Us Section -->
	<section id="about" class="section-style" style="background-image:url(photogallery/azar15.jpg);"> 
		<div class="pattern height-resize"> 
			<div class="container">
			<!-- <div class="other-height"></div> -->
			<h1 class="site-title">
					<a href="categories.php" class="title"> 
						Projects
					</a>
				</h1><!-- /.site-title -->
				<div class="next-section mob-section2 marg-arrow2">
					<a class="go-to-subscribe"><span></span></a>
				</div><!-- /.next-section -->
			</div><!-- /.container -->
		</div><!-- /.pattern -->
	</section><!-- /#about -->
	<!-- About Us Section End -->




	<!-- contemporary Section -->
	<section id="subscribe" class="section-style" style="background-image:url(photogallery/home12.jpg);">
		<div class="pattern height-resize">
			<div class="container">
			<!-- <div class="other-height"></div> -->
				<h1 class="site-title">
					<a href="contactus.php" class="title"> 
						Contact Us
					</a>
				</h1><!-- /.site-title -->				
					<div class="next-section marg-arrow3">
						<a class="go-to-page-top"><span style="transform: rotate(224deg);margin-top: 10px;"></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->
	</section><!-- /#subscribe -->
		<!-- contemporary Section End -->    
        

		
		
	<?php include_once"footer.php"?>

	<!-- jQuery Library -->
	<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
	<!-- Modernizr js -->
	<script type="text/javascript" src="assets/js/modernizr-2.8.0.min.js"></script>
	<!-- Plugins -->
	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<!-- Custom JavaScript Functions -->
	<script type="text/javascript" src="assets/js/functions.js"></script>
	<!-- Custom JavaScript Functions -->
	<script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>
	</body>
</html>
