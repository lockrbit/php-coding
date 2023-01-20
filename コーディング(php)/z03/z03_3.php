<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>z03_3</title>
  </head>

<?php
  $var = 1;
  switch ($var) {
    case 1 :
        $var = $var + 10;
      break;

    case 2 :
        $var = $var + 20;
      break;

    case 3 :
        $var = $var + 30;
      break;

    default:$var = $var - 100;
  }

  print "変数の中身は".$var."になりました";

?>

  </body>
</html>
