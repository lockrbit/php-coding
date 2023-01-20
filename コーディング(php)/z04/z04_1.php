<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>z04_1</title>
</head>
<body>
  <?php
  //whileで使って10行表示
  $i = 0;
  while($i < 10){
  	print "あ<br>";
  	$i++;
  }
  print "<hr>";

  //do whileを使って10行表示
  $i = 0;
  do{
  	print "あ<br>";
  	$i++;
  }while($i < 10);
  print "<hr>";

  // forを使って10行表示
  for($i = 0; $i < 10; $i++){
  	print "あ<br>";
  }
  ?>
</body>
</html>
