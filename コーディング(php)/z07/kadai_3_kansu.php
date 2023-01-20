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
	$suga = array("氏名"=>'菅 華子',"数学"=>90,"国語"=>62,"理科"=>76,"社会"=>25);
	$koizumi = array("氏名"=>'小泉輝夫',"数学"=>88,"国語"=>66,"理科"=>81,"社会"=>98);
	$kamiya = array("氏名"=>'神谷弘樹',"数学"=>70,"国語"=>63,"理科"=>74,"社会"=>65);
	$amemiya = array("氏名"=>'雨宮賢一',"数学"=>95,"国語"=>76,"理科"=>48,"社会"=>92);
	$miyamoto = array("氏名"=>'宮元智子',"数学"=>78,"国語"=>85,"理科"=>32,"社会"=>89);

	print '<th>氏名</th>'.'<th>数学</th>'.'<th>国語</th>'.'<th>理科</th>'.'<th>社会</th>'.'<th>平均点</th>'.'<th>評価</th>';
	print "</tr>";

	print"<tr>";

	simei()
	function simei(){
		foreach( $suga as $simei => $tensu ){
			for($i=0; $i<5; $i++){
		print "<td>".$tensu[$i]."</td>";

	}
}

	$heikin += $tensu[$i + 1];
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
