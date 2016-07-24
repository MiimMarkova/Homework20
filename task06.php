<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
form *{
display: block;
}
form input {
width: 80%;
}
</style>
</head>
<body>
	<form action = "" method = "post" id = "form">
		<label for="user">Enter user name:</label>
		<input type="text" id = "user" value = "<?= isset($_POST['user']) ? $_POST['user'] : '' ?>"/>
		<p id = "user-e"></p>
		<label for="pass1">Enter a password</label>
		<input type="password" id = "pass1" value = "<?= isset($_POST['pass1']) ? $_POST['pass1'] : ''  ?>" />
		<p id = "pass1-e"></p>
		<label for="pass2">Repeat your password:</label>
		<input type="password" id = "pass2" value = "<?= isset($_POST['pass2']) ? $_POST['pass2'] : ''  ?>" />
		<p id = "pass2-e"></p>
		<label for="phone">Enter your phone number:</label>
		<input type="text" id= "phone" value = "<?= isset($_POST['phone']) ? $_POST['phone'] : ''  ?>" />
		<p id = "phone-e"></p>
		<button type = "button"  id = "btn">Submit</button>
	</form>
	
	
</body>
</html>