<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>課題4</title>
</head>
<body>
  <?php
	$a = rand(10,15);
	pyramid($a);

	function pyramid($atai){
		for ($i = 1; $i <= $atai; $i++) {
			for ($j = 1; $j <= $atai - $i; $j++) {
				print "　";
			}

			for ($j = 1; $j < 2 * $i; $j++) {
				print "■";
			}

			print "<br>";
		}

		for ($i = 1; $i <= $atai; $i++) {
			for ($j = 1; $j <= $atai + $i; $j++) {
				print "　";
			}

			for ($j = 1; $j < 2 * $i; $j++) {
				print "■";
			}

			print "<br>";
		}

		for ($i = 1; $i <= $atai; $i++) {
			for ($j = 1; $j <= $atai - $i; $j++) {
				print "　";
			}

			for ($j = 1; $j < 3 * $i; $j++) {
				print "■";
			}

			print "<br>";
		}

	}
  ?>
</body>
</html>
