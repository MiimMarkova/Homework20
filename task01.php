<?php ?>
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
		background-color: #e0e0eb;
		}
		#btn{
		width: 50%;
		margin: 10px 0px;
		float: right;
		}
		#res {
		width: 100%;
		margin: 10px 0;
		}
	</style>
</head>
<body>
<?php
if (!empty($_POST)) {
	$num1 = empty($_POST['numA']) ? "": $_POST['numA'];
	$num2 = empty($_POST['numB']) ? "": $_POST['numB'];
	$sel = empty($_POST['action']) ? "": $_POST['action'];
	if ( $sel == '+') {
		$res = $num1 + $num2;
	}
	if ( $sel == "-") {
		$res = $num1 - $num2;
	}
	if ( $sel == '*') {
		$res = $num1 * $num2;
	}
	if ( $sel == '/') {
		$res = $num1 / $num2;
	}
}
?>
	<form action = "" method = "post">
		<label for = "num1" >Enter first number:</label>
		<input type = "number" name = "numA" class = "num">
		<select name = "action">
			<option value = "+">+</option>
			<option value = "-">-</option>
			<option value = "*">*</option>
			<option value = "/">/</option>
		</select>
		<label for = "num2" >Enter second number:</label>
		<input type = "number" name = "numB" class = "num">
		<input  type = "submit" id = "btn">
		<input  name = "result" id = "res" value = "<?= empty($res) ? "": $res?>">
	</form>

</body>
</html>