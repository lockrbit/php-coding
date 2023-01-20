<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>z06_3</title>
</head>
<body>
  <?php
	$kingaku = 1200;
	$shiharai = keisan($kingaku);
	print "税込み金額は".$shiharai."円です";

	function keisan($zeinuki){
		$zeikomi = $zeinuki * 1.1;
		return $zeikomi;
	}
  ?>
</body>
</html>
