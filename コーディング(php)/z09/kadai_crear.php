<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>完了</title>
  </head>
  <body>
    <body>
      <?php

      $_SESSION["name"] = $_POST["name"];
      $_SESSION["tenpo"] = $_POST["tenpo"];
      $_SESSION["opinions"] = $_POST["opinions"];
      if(isset($_POST['jyanru'])){
        for($i = 0; $i < count($_POST['jyanru']); $i++){
          $_SESSION["jyanru"][$i] = $_POST['jyanru'][$i];
        }
      }

    ?>
    <p>送信が完了しました。</p>
    <p>内容の確認は<a href="kadai_check.php">こちら</a></p>
    </body>
  </body>
</html>
