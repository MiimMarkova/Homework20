<?php
$num1 = isset($_POST['num1']) ?  $_POST['num1'] : '0';
$from = isset($_POST['from']) ? $_POST['from'] : '';
$to = isset($_POST['to']) ? $_POST['to'] : '';

if ($_POST) {
}
if ($from == 'C') {
	$res = ($num1 * (9 / 5)) + 32;
}
if ($from == 'F') {
	$res = ($num1 - 32) * (5 / 9);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insert title here</title>
	<style type = "text/css"> 
		form {
		width: 70%;
		margin: 100px auto;
		padding: 1em;
		background-color: #b3b9cc;
		}
	</style>
</head>
<body>
<form action = "" method = "post">
	<label for = "num1">Enter a number:</label>
	<input name = "num1" type = "number" />
	<select name = "from" >
		<option value = "C">Celsius</option>
		<option value = "F">Fahrenhait</option>
	</select>
	<select name = "to" >
		<option value = "F">Fahrenhait</option>
		<option value = "C">Celsius</option>
	</select>
	
	<input type = "submit" />
	<p> <?php if ( $from == $to) {
		echo 'Set the proper values.'; 
		} else {
		echo $res;
		}?></p>
</form>
</body>
</html>