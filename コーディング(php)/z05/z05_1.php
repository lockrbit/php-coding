<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>z05_1</title>
</head>
<body>
  <?php

	$name[0] = "岩崎";
	$name[1] = "山田";
	$name[2] = "佐藤";
	$name[3] = "藤原";

  $var[0] = "0 番目";
  $var[1] = "1 番目";
  $var[2] = "2 番目";
  print $var[0]."<br>";
  print $var[1]."<br>";
  print $var[2]."<br>";
  $data[] = 123;
  $data[] = 456;
  $data[] = 789;
  for($i=0; $i<3; $i++){
  print $data[$i]."<br>";
  }
  ?>
</body>
</html>
