<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>z05_4</title>
</head>
<body>
  <?php

	$kakaku = array("りんご"=>200 , "ばなな"=>150 , "メロン"=>500);
	foreach( $kakaku as $kudamono => $price ){
	print $kudamono. "の価格は" . $price . "です<br>";
	}

  ?>
</body>
</html>
