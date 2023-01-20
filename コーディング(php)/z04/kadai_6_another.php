<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>課題6</title>
  <style>
  table {
  border-collapse: collapse;
  border: solid 3px;
  font-size: 30px;
  width: 480px;
  height: 480px;
  text-align: center;
  }
  tr:first-child, th:first-child {
  background: #696969;
  color: #fff
  }
  th,td {
  width: 70px;
  border: dotted 2px;
  }
  </style>
  </head>

  <body>
  <table>
  <tr>
  <th></th>
  <?php
    for( $i = 1; $i <= 9; $i++) {
    print "<th>{$i}</th>";
  }
  print "</tr>";

  for( $i = 1; $i <= 9; $i++) {
    print "<tr>";
    print "<th>{$i}</th>";
    for( $j = 1; $j <=9; $j++){
      print "<td>".$i*$j."</td>";
    }
    print "</tr>";
  }
  ?>
  </table>
  </body>
  </html>
