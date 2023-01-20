<?php
  $times=$_COOKIE["count"];
  if(!isset($times)){
    $times=0;
  }else{
    $times++;
  }
  setcookie("count", $times, time()+60*60*24*365);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題1</title>
  </head>
  <body>
    <body>
			<form action="" method="post">
        ユーザーID<br>
        <input type="text" name="name">
        <input type="submit" value="ログイン">
      </form>

      <?php
      $name = $_POST["name"];
        if($times == 0){
          print "はじめて".$name."さん";
        }else if($times == 1 || $times == 2){
          print $name."さん、".($times + 1). "回目の訪問ありがとうございます。";
        }else{
          print $name."さん、毎度ありがとうございます。";
        }
      ?>
    </body>
  </body>
</html>
