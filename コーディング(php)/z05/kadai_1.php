<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題1</title>
</head>
<body>
  <?php
	$kuji = array("大当たり", "当たり", "ハズレ");
	$a = rand(0,2);
	print $kuji[$a];
  ?>
</body>
</html>
