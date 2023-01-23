<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <title>カレンダー</title>
</head>

<body>
    <div class="container">
        <?php

        //セレクトオプションのループ設定
        function optionLoop($start, $end, $value = null)
        {

            for ($i = $start; $i <= $end; $i++) {
                if (isset($value) &&  $value == $i) {
                    echo "<option value=\"{$i}\" selected=\"selected\">{$i}</option>";
                } else {
                    echo "<option value=\"{$i}\">{$i}</option>";
                }
            }
        }

        if (isset($_POST['calendar'])) {
            print "<p>ようこそ" . $_SESSION["user"] . "さん<br></p>";
            print '<form action="" method="post" class="change-calendar">' . '<select name="y">';
            optionLoop('1990', date('Y'), '2023');
            print '</select>' . "年" . '<select name="m">';
            optionLoop('1', '12', '1');
            print '</select>' . "月" . '<input type="submit" value="表示" name="calendar">' . '</form>';
        } else {
            // ゲストか判断
            if (!isset($_POST['guest'])) {
                // ゲストでない場合
                // user.txt内のデータを配列に格納
                $hairetu = file("user.txt");
                // 配列内のデータを繰り返し参照
                for ($i = 0; $i < count($hairetu); $i++) {
                    // 登録されているユーザーIDのみ取り出す
                    $id = strstr($hairetu[$i], ',', true);
                    // 登録済みユーザーIDと送られてきたユーザーIDが一致しているか確認
                    if (strcmp($_POST["id"], $id) == 0) {
                        // 一致した場合
                        // 配列内のデータからパスワードのみを取り出す
                        $pass = strstr(substr($hairetu[$i], strpos($hairetu[$i], ',') + 1, strlen($hairetu[$i])), ",", true);                        // 配列内のデータから名前のみを取り出す
                        $user = substr($hairetu[$i], strrpos($hairetu[$i], ',') + 1, strlen($hairetu[$i]));
                        // 要素内のデータ確認用
                        // print $id . "<br>";
                        // print $pass."<br>";
                        // print $user . "<br>";

                        $_SESSION["id"] = $id;
                        $_SESSION["pass"] = $pass;
                        $_SESSION["user"] = $user;

                        // 送られてきたユーザーIDとパスワードが両方一致した場合
                        if (strcmp($_POST["id"], $id) == 0 && strcmp($_POST["pass"], $pass) == 0) {
                            print "<p>ようこそ" . $user . "さん</p>";
                            print '<form action="" method="post" class="change-calendar">' . '<select name="y">';
                            optionLoop('1990', date('Y'), '2023');
                            print '</select>' . "年" . '<select name="m">';
                            optionLoop('1', '12', '1');
                            print '</select>' . "月" . '<input type="submit" value="表示" name="calendar">' . '</form>';
                            // 処理を終了
                            break;
                        } else {
                            print "IDかパスワードが間違っています";
                            // 処理を終了
                            break;
                        }
                        // 登録済みユーザーIDと送られてきたユーザーIDが一致しない場合
                    }
                }
            }
        }
        ?>
        <table>
            <tr>
                <th class="week">日</th>
                <th class="week">月</th>
                <th class="week">火</th>
                <th class="week">水</th>
                <th class="week">木</th>
                <th class="week">金</th>
                <th class="week">土</th>
            </tr>
            <tr>
                <?php
                if (!isset($_POST['y'])) {
                    $y = 2023;
                    $m = 1;

                    // 1 日の曜日を取得
                    $wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
                    // その数だけ空白を表示
                    for ($i = 1; $i <= $wd1; $i++) {
                        print "<td> </td>";
                    }

                    $d = 1;
                    while (checkdate($m, $d, $y)) {
                        print "<td>" . $d . "</td>";
                        if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
                            print "</tr>";
                            if (checkdate($m, $d + 1, $y)) {
                                print "<tr>";
                            }
                        }
                        $d++;
                    }
                    // 最後の週の土曜日まで移動
                    $wdx = date("w", mktime(0, 0, 0, $m + 1, 1, $y));
                    for ($i = $wdx; $i < 7; $i++) {
                        print "<td> </td>";
                    }
                } else {
                    $y = $_POST["y"];
                    $m = $_POST["m"];

                    // 1 日の曜日を取得
                    $wd1 = date("w", mktime(0, 0, 0, $m, 1, $y));
                    // その数だけ空白を表示
                    for ($i = 1; $i <= $wd1; $i++) {
                        print "<td> </td>";
                    }

                    $d = 1;
                    while (checkdate($m, $d, $y)) {
                        print "<td>" . $d . "</td>";
                        if (date("w", mktime(0, 0, 0, $m, $d, $y)) == 6) {
                            print "</tr>";
                            if (checkdate($m, $d + 1, $y)) {
                                print "<tr>";
                            }
                        }
                        $d++;
                    }
                    // 最後の週の土曜日まで移動
                    $wdx = date("w", mktime(0, 0, 0, $m + 1, 1, $y));
                    for ($i = $wdx; $i < 7; $i++) {
                        print "<td> </td>";
                    }
                }
                ?>
            </tr>
        </table>
    </div>
</body>

</html>