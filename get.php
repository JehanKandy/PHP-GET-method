<?php
	if(isset($_GET['name']) || isset($_GET['age'])){
		echo "Hello ".$_GET['name']."<br>";
		echo "Your age is ".$_GET['age']."<br>";
		
		exit();	
	}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GET Method</title>
</head>
<body>
	<form action="<?php $_PHP_SELF ?>" method="GET">
		Name : <input type="text" name="name">
		<br><br>
		Age : <input type="text" name="age">
		<br><br>
		<input type="submit" value="Submit">	
	</form>


</body>
</html>