<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>z06_2</title>
</head>
<body>
  <?php
	$var = rand(1,20);
	kansu_test($var);

	function kansu_test($hikisu){
		if($hikisu < 10){
			$hikisu = 0;
		}
		print "値は".$hikisu."です";
	}
  ?>
</body>
</html>
