<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Rola Vincent | Categories </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/font.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	
	
	<script language="javascript">
		document.onmousedown=disableclick;
	</script>

</head>


<body style="height:100vh;" oncontextmenu="return false">
	
<?php include_once"menu.php"?>	

<div style="height:80px;display:block;"></div>

<div style="width:100%;margin-top:6em;position: absolute;">
	<ul class="category_list">
		
		<li class="item_list">
			<a href="gallery-classic.php" > <img src="category/classic.jpg" class="category_image"/></a>
			<span class="caption">
				<a href="gallery-classic.php" class="project_title">CLASSIC</a>
			</span>			
		</li>
		
		
		<li class="item_list">
			<a href="gallery-contemporary.php"><img src="category/contemprory.jpg" class="category_image"/></a>
			<span class="caption">
				<a href="gallery-contemporary.php" class="project_title">CONTEMPORARY</a>
			</span>
		</li>
		<li class="item_list">
			<a href="gallery-commercial.php" ><img src="category/commercial.jpg" class="category_image"/></a>
			<span class="caption">
				<a href="gallery-commercial.php" class="project_title">COMMERCIAL AND HOSPTALITY</a>
			</span>
		</li>
		<li class="item_list">
			<a href="gallery-details.php?projectId=24"><img src="category/beforeafter.jpg" class="category_image"/></a>
			<span class="caption">
				<a href="gallery-details.php?projectId=24" class="project_title">BEFORE AND AFTER</a>
			</span>
		</li>
	</ul>
</div>

<style>
.main-footer {
    height: 100px;
    font-family: "Raleway" !important;
    width: 100%;
    float: left;
    position: absolute;
    bottom: 0;
}
</style>

<?php include_once"footer.php"?>

</body>
</html>
