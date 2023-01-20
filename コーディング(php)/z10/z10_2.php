<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>z09_1</title>
  </head>
  <body>
    <body>
    <?php
      $data = file_get_contents("sample1.txt");
      print $data . "<br>";
      $hairetsu = file("sample1.txt");
      print_r($hairetsu);
    ?>
    </body>
  </body>
</html>
