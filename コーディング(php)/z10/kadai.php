<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題1</title>
  </head>
  <body>
    <body>
    <?php
    date_default_timezone_set('Asia/Tokyo');
    $str = date('Y年m月d日H時i分s秒');
    file_put_contents("log.txt", $str."<br>", FILE_APPEND);

    $data = file_get_contents("log.txt");
    print $data."<br>";
    ?>
    </body>
  </body>
</html>
