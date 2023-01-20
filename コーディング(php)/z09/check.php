<?php
session_start();
?>
<html>
  <head>
    <title>check</title>
  </head>
  <body>
    <?php
      print "登録済み:<br>";
      print $_SESSION["goodsname"] . "<br>";
      session_destroy();
    ?>
    追加で商品を登録する場合は<a href="session.html">こちらへ</a>
  </body>
</html>
