<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
?>
<?php

//GoogleカレンダーAPIから祝日を取得

$year = date("Y");

function getHolidays($year)
{ //その年の祝日を全て取得する関数を作成

    $api_key = 'AIzaSyAiUVnbM1z5g7ufR5XEVi8zD4W1MtNmcAE'; //取得したAPIを入れる
    $holidays = array(); //祝日を入れる配列の箱を用意しておく
    $holidays_id = 'japanese__ja@holiday.calendar.google.com';
    $url = sprintf(
        //sprintf関数を使用しURLを設定
        //このURLはGoogleカレンダー独自のURL
        //Googleカレンダーから祝日を調べるURL
        'https://www.googleapis.com/calendar/v3/calendars/%s/events?' .
            'key=%s&timeMin=%s&timeMax=%s&maxResults=%d&orderBy=startTime&singleEvents=true',
        $holidays_id,
        $api_key,
        $year . '-01-01T00:00:00Z', // 取得開始日
        $year . '-12-31T00:00:00Z', // 取得終了日
        150 // 最大取得数
    );

    if ($results = file_get_contents($url, true)) {
        //file_get_contents関数を使用
        //URLの中に情報が入っていれば（trueなら）以下を実行する
        $results = json_decode($results);
        //JSON形式で取得した情報を配列に格納
        foreach ($results->items as $item) {
            $date = strtotime((string) $item->start->date);
            $title = (string) $item->summary;
            $holidays[date('Y-m-d', $date)] = $title;
            //年月日をキー、祝日名を配列に格納
        }
        ksort($holidays);
        //祝日の配列を並び替え
        //ksort関数で配列をキーで逆順に（１月からの順番にした）
    }
    return $holidays;
}


$Holidays_array = getHolidays($year);
//getHolidays関数を$Holidays_arrayに代入して使用しやすいようにしておく


//その日の祝日名を取得
function display_to_Holidays($date, $Holidays_array)
{
    //※引数1は日付"Y-m-d"型、引数に2は祝日の配列データ
    //display_to_Holidays("Y-m-d","Y-m-d") →引数1の日付と引数2の日付が一致すればその日の祝日名を取得する

    if (array_key_exists($date, $Holidays_array)) {
        //array_key_exists関数を使用
        //$dateが$Holidays_arrayに存在するか確認
        //各日付と祝日の配列データを照らし合わせる

        $holidays = "<br/>" . $Holidays_array[$date];
        //祝日が見つかれば$holidaysに入れておく
        return $holidays;
    }
}
//その日の祝日名を取得


?>
<!-----------祝日取得--------------->


<!-----------カレンダープログラム--------------->
<?php
//タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');


//前月・次月リンクが選択された場合は、GETパラメーターから年月を取得
if (isset($_POST['y'])) {
    $ym = $_POST['y'] . "-" . $_POST['m'];
} else {
    //今月の年月を表示
    $ym = date('Y-m');
}

//タイムスタンプ（どの時刻を基準にするか）を作成し、フォーマットをチェックする
//strtotime('Y-m-01')
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) { //エラー対策として形式チェックを追加
    //falseが返ってきた時は、現在の年月・タイムスタンプを取得
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

//今月の日付　フォーマット　例）2020-10-2
$today = date('Y-m-j');

//該当月の日数を取得
$day_count = date('t', $timestamp);

//１日が何曜日か
$youbi = date('w', $timestamp);

//カレンダー作成の準備
$weeks = [];
$week = '';

//第１週目：空のセルを追加
//str_repeat(文字列, 反復回数)
$week .= str_repeat('<td></td>', $youbi);

for ($day = 1; $day <= $day_count; $day++, $youbi++) {

    $date = $ym . '-' . $day;
    //それぞれの日付をY-m-d形式で表示例：2020-01-23
    //$dayはfor関数のおかげで１日づつ増えていく
    $Holidays_day = display_to_Holidays(date("Y-m-d", strtotime($date)), $Holidays_array);
    //display_to_Holidays($date,$Holidays_array)の$dateに1/1~12/31の日付を入れる

    if ($today == $date) {
        //もしその日が今日なら
        $week .= '<td class="today"><tt>' . $day; //今日の場合はclassにtodayをつける
    } elseif (display_to_Holidays(date("Y-m-d", strtotime($date)), $Holidays_array)) {
        //もしその日に祝日が存在していたら
        //その日が祝日の場合は祝日名を追加しclassにholidayを追加する
        $week .= '<td class="holiday"><tt>' . $day . $Holidays_day;
    } else {
        //上２つ以外なら
        $week .= '<td><tt>' . $day;
    }
    $week .= '</tt></td>';

    if ($youbi % 7 == 6 || $day == $day_count) { //週終わり、月終わりの場合
        //%は余りを求める、||はまたは
        //土曜日を取得

        if ($day == $day_count) { //月の最終日、空セルを追加
            $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>'; //weeks配列にtrと$weekを追加

        $week = ''; //weekをリセット
    }
}

?>
<!-----------カレンダープログラム--------------->
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>カレンダー</title>
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
</head>

<style>
    body {
        background: #dcdcdc;
    }

    button {
        height: 35px;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    a:visited {
        color: #000;
    }

    h1 {
        text-align: center;
        font-family: "Nico Moji";
    }

    h2 {
        width: 100%;
        text-align: center;
        background: red;
    }

    .container {
        width: 100%;
        max-width: 780px;
        height: auto;
        margin: 0 auto;
        margin-top: 20px;
    }

    .change-calendar {
        text-align: center;
        margin-bottom: 30px;
    }

    select {
        width: 10%;
        height: 30px;
        text-align: center;
    }

    .change-calendar input {
        width: 10%;
        height: 30px;
    }

    table {
        width: 100%;
        margin: 0 auto;
        background: #fff;
        border-collapse: collapse;
    }

    .month {
        height: 50px;
        background: #00345b;
        font-size: clamp(0.8rem, 2vw, 2rem);
    }

    th {
        width: 100px;
        background: #d3d3d3;
        height: 30px;
        text-align: center;
    }

    td {
        height: 100px;
    }

    tr,
    th,
    td {
        border: thin solid #000;
    }

    tt {
        position: relative;
        top: -30px;
        left: 15px;
        font-size: clamp(0.8rem, 1.5vw, 2rem);
    }

    .holiday tt {
        top: -20px;
    }

    .today {
        background: orange !important;
    }

    th:nth-of-type(1),
    td:nth-of-type(1),
    .holiday {
        color: red;
    }

    th:nth-of-type(7),
    td:nth-of-type(7) {
        color: blue;
    }
</style>

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
            print "<h1>ようこそ<span>" . $_SESSION["user"] . "</span>さん<br></h1>";
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
                            print "<h1>ようこそ <span>" . $user . "</span>さん</h1>";
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
        <button><a href="index.html">ログアウト</a></button>
        <table class="table table-bordered">
            <?php
            if (isset($_POST['calendar'])) {
                print  '<tr><th colspan="7" class="month" style="color: #FFF;">' . $_POST['y'] . "年：" . $_POST['m'] . "月</th><tr>";
            } else {
                print  '<tr><th colspan="7" class="month" style="color: #FFF;">2023年：1月</th><tr>';
            }
            ?>
            <tr>
                <th class="week">日</th>
                <th class="week">月</th>
                <th class="week">火</th>
                <th class="week">水</th>
                <th class="week">木</th>
                <th class="week">金</th>
                <th class="week">土</th>
            </tr>
            <?php
            foreach ($weeks as $week) {
                echo $week;
            }
            ?>
            <tr>
        </table>
    </div>
</body>

</html>