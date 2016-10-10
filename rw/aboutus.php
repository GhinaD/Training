<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Rola Vincent | About </title>
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
<!--<body oncontextmenu="return false" onkeypress=”return disableCtrlKeyCombination(event);” onkeydown=”return disableCtrlKeyCombination(event);”>-->

	
<body oncontextmenu="return false">
<?php include_once"menu.php"?>	



	<!-- About Us Section -->
		<div class="about-main">
			<div class="about-pic">
				<img src="images/rola.jpg" style="width:70%;/*display:table*/"/>
			</div>
			<div  class="about-text">				
				Rola Vincent is an international pioneer of bespoke design. She brings her expertise to some of the finest and most coveted addresses in the world; from sumptuous homes, to hospitality, outdoor and commercial environments. Her range of design styles is virtually unlimited and her striking aesthetic concepts have been applied to all her projects. All her work is caracterized by an unrivaled combination of detailing, diverse design, cutting-edge technology and the exclusivity synonymous with individually tailored venture. 
				<br/><br/>
				
				Among Rola Vincent’s skills is the art of transforming each space without constricting herself to one “House Style” in order for the creations to be individually bespoke to each client’s projects. They are all completed with an effortless marriage of design and functionality that blend smoothly with timeless style ensuring signature precision.    
				<br/><br/>
				
				Her interior architectural heritage is woven into both challenging new restoration for listed houses and the engineering of new interiors with offering not only intricate attention to detail but ground breaking originality married with the finest craftsmanship and quality.  
				<br/><br/>
				
				Her extensive range of expertise ensures that she remains at the forefront of luxury design.
				<br/>
			</div>
		</div>
	


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
