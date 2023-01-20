<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>色表示</title>
</head>
<body>
  <?php
	if(isset($_POST['color'])){
		for($i = 0; $i < count($_POST['color']); $i++){
			print $_POST['color'][$i]."<br>";
		}
	}
  ?>
</body>
</html>
