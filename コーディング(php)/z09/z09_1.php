<?php
  $times=$_COOKIE["count"];
  if(!isset($times)){
    $times=0;
  }else{
    $times++;
  }
  setcookie("count", $times, time()+10);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>z09_1</title>
  </head>
  <body>
    <body>
    <?php
      if($times == 0){
        print("はじめての訪問ですね?");
      }else{
        print($times . "回目の訪問ですね");
      }
    ?>
    </body>
  </body>
</html>
