<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題3</title>
</head>
<body>
  <?php
	keisan();

	function keisan(){
		$c = rand(1,10);
		$d = rand(1,10);
		if($c < $d){
			$keisan = $d - $c;
			print $d.'($d)から'.$c.'($c)を引いた数は：'.$keisan;
		}else if($c > $d){
			$keisan = $c - $d;
			print $c.'($c)から'.$d.'($d)を引いた数は：'.$keisan;
		}else{
			print $c.'($c)と'.$d.'($d)は同じ値';
		}
	}
  ?>
</body>
</html>
