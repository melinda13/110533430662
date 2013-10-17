<html>
	<head>
	<title>Hasil</title>
	<body>

		<?php  
		$nilai1 = $_POST['nilai1'];  
		$nilai2 = $_POST['nilai2']; 
		$hasil = $_POST['hasil'];
		$operator = $_POST['operator'];
		
		if ($operator == "+")  {  
			$hasil = $nilai1 + $nilai2;    
		}  
		if ($operator == "-")  {  
			$hasil = $nilai1 - $nilai2;
		}  
		if ($operator == "*")  {  
			$hasil = $nilai1 * $nilai2;
		}  
		if ($operator == "/") {  
			$hasil = $nilai1 / $nilai2;
		} 
		echo $_POST['$hasil'];
	?>
	</body>
	</head>
</html>