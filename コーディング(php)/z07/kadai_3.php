<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題3</title>
	<style>
		table {
		border-collapse: collapse;
		border: solid 3px;
		font-size: 30px;
		width: 100%;
		height: 600px;
		text-align: center;
		}
		tr:first-child{
		background: #696969;
		color: #fff
		}
		th{
		border: dotted 2px;
		height: 10%;
		}
		td{
			border: dotted 2px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
  <?php
	$gakusei = array(
		['菅 華子',90,62,76,25],
		['小泉輝夫',88,66,81,98],
		['神谷弘樹',70,63,74,65],
		['雨宮賢一',95,76,48,92],
		['宮元智子',78,85,32,89]
		);
	print '<th>氏名</th>'.'<th>数学</th>'.'<th>国語</th>'.'<th>理科</th>'.'<th>社会</th>'.'<th>平均点</th>'.'<th>評価</th>';
	print "</tr>";

	print"<tr>";
	foreach( $gakusei as $tensu ){
		for($i=0; $i<5; $i++){
	print "<td>".$tensu[$i]."</td>";
	$heikin += $tensu[$i + 1];
}
	$heikin = $heikin / 4;
	print "<td>".round($heikin, 0)."</td>";
	if ($heikin >= 80 ){
		print "<td>A</td>";
	}else if ($heikin >= 70 && $heikin<80){
		print "<td>B</td>";
	}else if ($heikin >= 60 && $heikin<70){
		print "<td>C</td>";
	}else {
		print "<td>D</td>";
	}
	$heikin = 0;
	print "</tr>";
	}
  ?>
	</table>
</body>
</html>
