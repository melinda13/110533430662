<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml : lang="en" lang="en">
<head>
	<title>Kalkulator Sederhana</title>
</head>

	<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" action="hitung.php">
		<label>Nilai 1</label>
			<input type="text" name="nilai1" />
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="/">*</option>
			<option value="/">/</option>
		</select>
		<label>Nilai 2</label>
			<input type="text" name="nilai2" />
			<input type="submit" value="=" />			
	</form>
</body>
</html>