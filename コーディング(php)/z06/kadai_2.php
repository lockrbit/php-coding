<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題2</title>
</head>
<body>
  <?php
	$a = rand(1,10);
	$b = rand(1,10);
	keisan($a,$b);

	function keisan($first, $next){
		print $first."と".$next."を乗算した値：".$first * $next."<br>";
		print $first."と".$next."を除算した値：".$first / $next."<br>";
	}
  ?>
</body>
</html>
