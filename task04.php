<?php

if (!empty($_POST['number'])) {
		$array = $_POST['number'];
	}
	
for ($i = 0; $i < count($array) ; $i++) {
	for ($j = 0; $j < count($array); $j++) {
		if ($array[$i] < $array[$j]) {
			$tmp = $array[$i];
			$array[$i] = $array[$j];
			$array[$j] = $tmp;
		}
	}
}

	$min = $array[0];
	$max =$array[count($array) - 1];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insert title here</title>
	<style type = "text/css">
		form {
		width: 30%;
		margin: auto;
		}
		form *{
		width: 100%;
		padding: 0.2em;
		margin: 10px;
		}
	</style>
</head>
<body>

	<form action = "" method = "post" style = "display: block;">
	<label for="number">Enter a number:</label>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type="number" name = "number[]"/>
	<input type = "submit" name = 'reset'/>
	<p> <?= "The least amount is $min,
	the biggest: $max" ?></p>
	</form>
	
</body>
</html>