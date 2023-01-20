<!DOCTYPE html>
<html lang=”ja”>
<head>
  <title>課題2</title>
  <meta charset=”utf-8”>
</head>
<body>
  <?php
    $a = 3+7;
    $b = 37-24;
    $c = 52*5;
    $d = 50/3;
    $e = (4-2)*(5+3);

    $keisan = ["3 + 7 = $a<br>", "37 - 24 = $b<br>", "52 * 5 = $c<br>", "50 / 3 = $d<br>", "(4 - 2) * (5 + 3) = $e<br>"];
for ($i = 0; $i < count($keisan); $i++) {
  print($keisan[$i]);
}

  ?>
</body>
</html>
