<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>z02_2</title>
  </head>

<?php
  $file = @fopen("file.txt","r")
  or die("ファイルが存在しません");

  $var = 10;
  print $var;
  print '$var';
  print "$var";

?>

  </body>
</html>
