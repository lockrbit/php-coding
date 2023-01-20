<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題1</title>
</head>
<body>
  <?php
	$num = rand(1,10);
	$a = rand(1,10);
	$goukei  = keisan($num,$a);
	print $num."を".$a."回加算した値：".$goukei;

	function keisan($first, $number){
		for ($i=1; $i<=$number; $i++)
		$kasan += $first;
		return $kasan;
	}
  ?>
</body>
</html>
