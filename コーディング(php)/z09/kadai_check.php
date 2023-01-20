<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>確認</title>
  </head>
  <body>
    <body>
    <?php

    print "氏名：".$_SESSION["name"]."<br>";
    print "店舗".$_SESSION["tenpo"]."<br>";
    print "商品ジャンル：";

    if(isset($_SESSION["jyanru"])){
    for($i = 0; $i < count($_SESSION["jyanru"]); $i++){
      print $_SESSION["jyanru"][$i]."、";
    }
    print "<br>";
    }else{
    print "<br>";
    }
    print "欲しい商品を書いてください：".$_SESSION["opinions"]."<br>";

    session_destroy();
    ?>
    もう一度アンケートを送信する場合は<a href="z09_web10_tsukahara_2.html">こちらへ</a>
    </body>
  </body>
</html>
