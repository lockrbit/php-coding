<!DOCTYPE html>
<html lang=”ja”>
<head>
  <title>課題4</title>
  <meta charset=”utf-8”>
</head>
<body>
  <?php
    $var = rand(1, 3);

    switch ($var){
    case 1:
      print '<body style="background-color:red">';
      break;

    case 2:
      print '<body style="background-color:blue">';
      break;

    case 3:
      print '<body style="background-color:yellow">';
      break;
    }

  ?>
</body>
</html>
