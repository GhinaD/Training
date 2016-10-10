<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Rola Vincent | Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/font.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<style>
	textarea
	{  
		overflow:hidden;
		display:block;
	}
	
	</style>
	
			<script language="javascript">
			document.onmousedown=disableclick;
		</script>
		
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


	<!-- About Us Section -->
	<section id="about" class="section-style" style="background-color:#969696;height:auto !important;" > 
		<!-- <img src="images/contact-logo.png" style="margin: auto;display: table;width: 650px;" class="img-contact"/> -->
		<div class="container1 address-details" style="color:white;">
            <div class="about-height"></div>
				<h1 class="site-title">
					Get in touch
				</h1><!-- /.site-title -->
				<br>
				<h4 class="section-name"><br><br>
					1, AVENUE ST HONOR&Eacute; D’EYLAU – 75116 PARIS<br><br>
					TEL : +33.1.40.70.96.17 <br><br>
					FAX : +33.1.47.20.09.51<br><br>
					EMAIL :<a href="mailto:info@rolavincent.com" class="contact-hover">info@rolavincent.com</a>
				</h4><!-- /.section-name -->
				
				<br><br>
				
				<h4 class="section-name">
					CONNECT WITH US<br><br>
						<a href="" class="contact-hover"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size:34.5px;padding-right:5px;"></i></a>
						<a href="mailto:info@rolavincent.com" class="contact-hover"><i class="fa fa-envelope-square" aria-hidden="true" style="font-size:35px;padding-right:5px;"></i></a>
						<a href="" class="contact-hover"><i class="fa fa-instagram" aria-hidden="true" style="font-size:35px;"></i></a>
				</h4><!-- /.section-name -->				
				<h6 class="site-title">
					
				</h6><!-- /.site-title -->
			</div><!-- /.container -->
	</section><!-- /#about -->
	<!-- About Us Section End -->


	
	<section class="section-style" style="background-color:#969696;height:auto !important;padding-bottom:5%;" > 
		<!-- <img src="images/contact-logo.png" style="margin: auto;display: table;width: 650px;" class="img-contact"/> -->
		<div class="container2" style="color:white;">
			<form method="post" action="contactusaction.php" style="margin-top:15%;">
				<input type="text" name="name" id="name" class="msg-form" required> <br> NAME <br><br>
				<input type="text" name="email" id="email" class="msg-form" required> <br> EMAIL ADDRESS <br><br>
				<input type="text" name="subject" id="subject" class="msg-form" required> <br> SUBJECT <br><br>
				<textarea  name="message" id="message" class="msg-form" required></textarea> MESSAGE <br><br>
				<input type="submit" value="SUBMIT" class="subbtn"/>
			</form>
		</div><!-- /.container -->
	</section><!-- /#about -->
	<!-- About Us Section End -->
	
	<script>
		var textarea = document.querySelector('textarea');	
		textarea.addEventListener('keydown', autosize);
        function autosize()
		{
			var el = this;
			setTimeout(function()
			{
				el.style.cssText = 'height:auto; padding:0';
				// for box-sizing other than "content-box" use:
				// el.style.cssText = '-moz-box-sizing:content-box';
				el.style.cssText = 'height:' + el.scrollHeight + 'px';
			},0);
		}
	</script>
	
	
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
