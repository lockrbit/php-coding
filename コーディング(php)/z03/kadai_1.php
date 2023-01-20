<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題1</title>
  </head>

<?php
  $kuji = rand(1, 100);
if ($kuji >=1 && $kuji <= 15) {
  print '<img src=images/daikiti.png width="100%" height="100%">'.'<body style="background-color:yellow">';
} elseif ($kuji >= 16 && $kuji <= 40) {
  print '<img src=images/tyukiti.png width="100%" height="100%">';
} elseif ($kuji >=41  && $kuji <= 70) {
  print '<img src=images/kiti.png width="100%" height="100%">';
} elseif ($kuji >= 71 && $kuji <= 95) {
  print '<img src=images/kyou.png width="100%" height="100%">';
} else{
  print '<img src=images/daikyou.png width="100%" height="100%">'.'<body style="background-color:red">';
}
?>

  </body>
</html>
