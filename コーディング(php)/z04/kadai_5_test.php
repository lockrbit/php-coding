<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題5</title>
  </head>
  <body>
<?php
  for ($i = 30; $i >= 0; $i--) {
    print "$i:";
    
    if($i % 3 ==0){
      print "A";
    }

    if($i % 2 ==0){
      print "B";
    }

    if($i % 5 == 0){
      print "C";
    }

    print "<br>";
  }
?>

  </body>
</html>
