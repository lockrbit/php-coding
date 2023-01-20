<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題2</title>
  </head>
  <body>
    <body>
    <?php
    $class = $_POST["class"];
    $name = $_POST["name"];

    file_put_contents("form.txt", $class."、".$name."<br>", FILE_APPEND);

    $data = file_get_contents("form.txt");
    print $data."<br>";
    ?>
    </body>
  </body>
</html>
