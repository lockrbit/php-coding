<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題5</title>
  </head>
  <body>
<?php
 $i = 0;
  for ($i = 30; $i >= 0; $i--) {

    switch ($i) {

    case $i == 0:
      print "$i:ABC<br>";
    break;

    case $i % 2 == 0  && $i % 3 == 0 && $i % 5 == 0:
      print "$i:ABC<br>";
    break;

    case $i % 2 == 0  && $i % 3 == 0:
      print "$i:AB<br>";
    break;

    case $i % 2 == 0  && $i % 5 == 0:
      print "$i:BC<br>";
    break;

    case $i % 3 == 0  && $i % 5 == 0:
      print "$i:AC<br>";
    break;

    case $i % 2 == 0:
      print "$i:B<br>";
    break;

    case $i % 3 == 0:
      print "$i:A<br>";
    break;

    case $i % 5 == 0:
      print "$i:C<br>";
    break;

    default:
      if($i == 0){
        print "$i:ABC<br>";
      }else{
        print "$i:<br>";
      }

  }
  }
?>

  </body>
</html>
