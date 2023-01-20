<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>総合演習：掲示板</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">

        <h1>掲示板</h1>

        <form method="POST" action="">
            <div id="flex">
                <div class="from_name">名前　　</div>
                <div><input type="text" name="name"></div>
            </div>

            <div id="flex">
                <div class="from_title">タイトル</div>
                <div><input type="text" name="title"></div>
            </div>

            <div id="flex">
                <div class="from_comment">コメント</div>
                <div><textarea name="comment" rows="8" cols="40"></textarea></div>
            </div>

            <input type="submit" name="kakikomi" class="submit" value="書き込み">
            <input type="reset" name="reset" class="reset" value="リセット">



        </form>


        <?php
        date_default_timezone_set('Asia/Tokyo');
        $name = $_POST["name"];
        $title = $_POST["title"];
        $time = date("Y/m/d/(D)H:i:s");
        $comment = $_POST["comment"];

        file_put_contents("chat.txt","$name,$title,$time,$comment,\n", FILE_APPEND);

        $file_name = "chat.txt";

        $all_data = file($file_name);

        $ideanversion_data = array_reverse($all_data);

        $i = (count(file('chat.txt')));
        print "<div class='keijiban'>";
        foreach ($ideanversion_data as $detail_kiji) {
            $data = explode(',', $detail_kiji);
            print "<div class='toukou'><div id='flex'><div class='namber'>[$i]</div>" . "<div class='title'>$data[1]</div>" . "<div class='name'>投稿者：</div><div class='color'>$data[0]</div>" . "<div class='time'>$data[2]</div></div>" . "<div class='text'>$data[3]</div></div>";
            $i--;
        }
        print "</div>";
        ?>
    </div>
</body>

</html>