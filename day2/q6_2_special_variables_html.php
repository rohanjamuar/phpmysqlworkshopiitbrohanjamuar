<!DOCTYPE html>
<html>
<head>
	<title>VI 2</title>
</head>
<body>
	<h1> Form </h1>
	<form method="POST" action="q6_2_special_variables_html.php">
		<input type="text" name="name" placeholder="Enter Name">
		<br>
		<input type="text" name="sub_1" placeholder="Enter Marks of Subject 1">
		<br>
		<input type="text" name="sub_2" placeholder="Enter Marks of Subject 2">
		<br>
		<input type="text" name="sub_3" placeholder="Enter Marks of Subject 3">
		<br>
		<input type="text" name="sub_4" placeholder="Enter Marks of Subject 4">
		<br>
		<input type="text" name="sub_5" placeholder="Enter Marks of Subject 5">
		<br>
		<input type="text" name="total" placeholder="Total Marks Obtained">
		<br>
		<input type="text" name="tot_m" placeholder="Total Marks">
		<br>
		<input type="text" name="percentage" placeholder="Percentage">
		<br>
		<input type="submit" value="Submit">
		<br>
	
	</form>

	<?php
	if ( isset( $_POST['submit'] ) ) {
		$name	=	$_POST['name'];
		$sub1 	=	$_POST['sub_1'];
		$sub2 	=	$_POST['sub_2'];
		$sub3 	=	$_POST['sub_3'];
		$sub4 	=	$_POST['sub_4'];
		$sub5	=	$_POST['sub_5'];
		$total    =   $_POST['total'];
		$tot_m  =   $_POST['tot_m'];
		$percentage   =   $_POST['percentage'];

		$total	=	$sub1 + $sub2 + $sub3 + $sub4 + $sub5;

		$percentage = ($total/500)*100;
		echo $percentage;
	}



	?>


</body>
</html>

