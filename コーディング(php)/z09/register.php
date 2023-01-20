<?php
session_start();
?>
<html>
  <head>
    <title>register</title>
  </head>
  <body>
    <?php
    $name = $_POST["goods"];
    $_SESSION["goodsname"] = $_POST["goods"];
        print "次の商品を登録しました<br>";
        print "商品:".$name ."<br>";
    ?>
    商品を確認したい場合は<a href="check.php">こちらへ</a>
  </body>
</html>
