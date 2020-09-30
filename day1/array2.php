<!DOCTYPE html>
<html>
<head>
	<title>Question 6</title>
</head>
<body>
	<?php 

	$array1 	= array(array(1,4),array(4,2));
	$array2 	= array(array(1,1),array(1,3));
	$sum 		= array(array(0,0),array(0,0));
	for ($i=0;$i<=1;$i++){
		for ($j=0;$j<=1;$j++){

		$sum[$i][$j]	=	$array1[$i][$j] + $array2[$i][$j];
}
}

	print_r($sum);

	?>
</body>
</html>