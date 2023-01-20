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
	$kuni = array("日本"=>"東京都" , "アメリカ"=>"ワシントン" , "カナダ"=>"オタワ", "ドイツ"=>"ベルリン", "オランダ"=>"アムステルダム", "フランス"=>"パリ", "イギリス"=>"ロンドン", "オーストラリア"=>"キャンベラ", "韓国"=>"ソウル", "中国"=>"北京");
	print '<th colspan="2">国名</th>'.'<th colspan="2">首都</th>';
	print "</tr>";

	print"<tr>";
	foreach( $kuni as $a => $syuto ){
	print "<td>".$a."</td>";
	print '<td class="haba">の首都は</td>';
	print "<td>".$syuto."</td>";
	print '<td class="haba">です。</td>';
	print "</tr>";
	}
  ?>
	</table>
</body>
</html>
