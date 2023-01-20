<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題3</title>
</head>
<body>
  <?php

	$kakaku = array("りんご"=>200 , "ばなな"=>150 , "メロン"=>500);
	$goukei = 0;
	foreach( $kakaku as $fruit => $price ){
		$a = rand(0,3);
		print $fruit.":".$a."個<br>";
		$goukei = $goukei + ($price * $a);
	}

	print "合計:".$goukei*1.1."<br>";
  ?>
</body>
</html>
