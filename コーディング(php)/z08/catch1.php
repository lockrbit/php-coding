<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>注文金額計算</title>
</head>
<body>
  <?php
		$m_kosu = $_POST['melon'];
		$a_kosu = $_POST['apple'];
		$s_kosu = $_POST['strawberry'];


		print "注文数は、<br>";
		print "メロン".$m_kosu."個<br>";
		print "りんご".$a_kosu."個<br>";
		print "いちご".$s_kosu."個<br>";
		print "合計金額は".($m_kosu * 500+$a_kosu * 100+$s_kosu * 350)."円です。"

  ?>
</body>
</html>
