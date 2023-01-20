<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題1</title>
</head>
<body>
  <?php
	$tate = rand(1,10);
	$yoko = rand(1,20);
	$kekka  = kukei($tate, $yoko);
	print "縦の長さ：".$tate."<br>"."横の長さ：".$yoko."<br>"."長方形の面積：".$kekka;

	function kukei($a, $b){
		$keisan = $a * $b;
		return $keisan;
	}
  ?>
</body>
</html>
