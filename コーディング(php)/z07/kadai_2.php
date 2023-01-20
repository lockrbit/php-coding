<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題2</title>
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
		}
		td{
			width: 20%;
			border: dotted 2px;
		}
		.haba{
			width: 10%;
		}
	</style>
</head>
<body>
	<table>
		<tr>
  <?php
	$syouhin = array(
		"ブレンドコーヒー"=>250,
	 	"アメリカンコーヒー"=>280,
		"カフェオレ"=>350,
		"カフェラテ"=>350,
		"ココア"=>420,
		"キャラメルラテ"=>450,
		"ダージリンティー"=>300,
		"アールグレイティー"=>300,
		"ウーロン茶"=>300,
		"ミルク"=>350
		);
	print '<th>商品名</th>'.'<th>価格</th>';
	print "</tr>";

	print"<tr>";
	foreach( $syouhin as $nomimono => $kakaku ){
	print "<td>".$nomimono."</td>";
	print "<td>".$kakaku."</td>";
	print "</tr>";
	}

	print "最低価格：".min($syouhin)."、最高価格：".max($syouhin);
  ?>
	</table>
</body>
</html>
