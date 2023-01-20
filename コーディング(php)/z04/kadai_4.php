<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題4</title>
  </head>
  <body>
<?php
  $i = 0;
  $sum = 0;
  for ($i = 0; $i < 101; $i++) {
    $sum = $sum + $i;
  }

  print "1~100の合計:$sum";
?>

  </body>
</html>
