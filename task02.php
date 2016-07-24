<?php

$errors = [];

	
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$pass1 = isset($_POST['pass1']) ? $_POST['pass1'] : '';
		$pass2 = isset($_POST['pass2']) ? $_POST['pass2'] : '';
		
if ($_POST) {
	
		if (empty($_POST['name']) || empty($_POST['pass1']) || empty($_POST['pass2'])) {
			$errors [] = "You must fill all requierements.";
		}
		if (!empty($name) && (strlen($name) <= 4)) {
			$errors[] = "Your username must be longer than 4 symbols.";
		}
	
		if (!empty($pass1) && (strlen($pass1) < 5)) {
			$errors[] =  "Your password must be longer than 5 symbols.";
		}
		if (ctype_alnum($pass1)){
			$errors[] = "Your password must contain non alpha-numeric symbols.";
		}
		if ($pass1 !== $pass2) {
			$errors[] = "Your second password is not the same.";
		}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Insert title here</title>
	<style type = "text/css">
		form {
		width: 40%;
		margin: auto;
		}
		form *{
		width: 100%;
		padding: 0.2em;
		}
	</style>
</head>
<body>
<?php foreach($errors as $value):?>
	<p style = "color: red; border: 1px solid red;"> <?= $value ?> </p>
<?php endforeach; ?>
<form action = "" method = "post">
	<label for="name">Your name:</label>
	<input type="text" name = "name"/>
	<label for = "pass1" >Your password:</label>
	<input type = "password" name = 'pass1'/>
	<label for = "pass" >Repeat your password:</label>
	<input type = "password" name = 'pass2'/>
	<input type = "submit" onclick = "" >
</form>

</body>
</html>