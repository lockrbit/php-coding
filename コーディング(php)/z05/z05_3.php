<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>z05_3</title>
</head>
<body>
  <?php
	$kakaku["りんご"] = 200;
	$kakaku["ばなな"] = 150;
	$kakaku["メロン"] = 500;
	print $kakaku["りんご"] . "<br>";
	print $kakaku["ばなな"] . "<br>";
	print $kakaku["メロン"] . "<br>";
	print_r($kakaku);

	$kakaku2 = array("チーズ"=>300, "ヨーグルト"=>150, "生クリーム"=>400, "牛乳"=>250);
	print_r($kakaku2);
  ?>
</body>
</html>
