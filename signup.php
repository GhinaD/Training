<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<h1> Sign up here ! </h1>
<form action="ajaxjs.php" method="POST" name="myForm">
	<ul class="list">
		<li class="item_list"><input type="text" placeholder="Name" name="name" id="name"/></li>
		<li class="item_list"><input type="text" placeholder="Email" name="email" id="email"/></li>
		<li class="item_list"><input type="password" placeholder="Password" name="pwd" id="pwd"/></li>
		<li class="item_list"><input type="password" placeholder="Confirm Password" name="confpwd" id="confpwd"/></li>
		<li class="item_list"><input type="submit" value="submit" onclick="function_form()"/></li>
	</ul>
</form>
</body>
</html>