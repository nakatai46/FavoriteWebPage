<?php
//ログイン確認
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user'])) {
  header("Location: index.php");
}

// ユーザーIDからユーザー名を取り出す
$query = "SELECT * FROM users WHERE user_id=".$_SESSION['user']."";
$result = $mysqli->query($query);

$result = $mysqli->query($query);
if (!$result) {
  print('クエリーが失敗しました。' . $mysqli->error);
  $mysqli->close();
  exit();
}

// ユーザー情報の取り出し
while ($row = $result->fetch_assoc()) {
  $username = $row['username'];
  $email = $row['email'];
}

// データベースの切断
$result->close();
?>

<?php
$url = "https://www.jma.go.jp/bosai/forecast/data/forecast/130000.json";

$json = file_get_contents($url);
$data = json_decode($json,true);

$publisher = $data[0]['publishingOffice'];
$publish_time = $data[0]['reportDatetime'];
$area = $data[0]['timeSeries'][0]['areas'][0]['area']['name'];
$today = $data[0]['timeSeries'][0]['areas'][0]['weathers'][0];
$tomorrow = $data[0]['timeSeries'][0]['areas'][0]['weathers'][1];
$dayAfterTomorrow = $data[0]['timeSeries'][0]['areas'][0]['weathers'][2];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>FavoriteWebPage</title>

</head>

<body>
    <header>
        <h1>
            <a href="http://home.prograrts.com/top.html#0">よく使うWEBサイト</a>
        </h1>
        <div class="user-information">
          <p style="color:greenyellow">ようこそ<?php echo $username; ?>さん！</p>
          <button>
            <a href="logout.php?logout" style="color: black;">ログアウト</a>
          </button>
    </header>
    <div class="search">
        <div class="form">
            <form method="get" action="http://www.google.co.jp/search" target="_blank">
                <img src="http://www.google.co.jp/favicon.ico" width="16">
                <input type="text" name="q" maxlength="255" value="" placeholder="検索">
                <input type="hidden" name="ie" value="UTF-8">
                <input type="hidden" name="oe" value="UTF-8">
                <input type="hidden" name="hl" value="ja">
                <input type="submit" name="btnG" value="検索">
            </form>
        </div>
        <div class="space"></div>
        <div class="form">
            <form action="http://ja.wikipedia.org/w/index.php" target="_blank">
                <a href="https://ja.wikipedia.org/wiki/%E3%83%A1%E3%82%A4%E3%83%B3%E3%83%9A%E3%83%BC%E3%82%B8"><img
                        src="http://ja.wikipedia.org/favicon.ico" width="16"></a>
                <input type="text" name="search" placeholder="検索">
                <input type="submit" name="fulltext" value="全文">
                <input type="submit" name="go" value="単語">
            </form>
        </div>
        <div class="space"></div>
        <div class="form">
            <form method="get" action="https://www.youtube.com/search" target="_blank">
                <a href="https://www.youtube.com/"><img src="https://www.youtube.com/favicon.ico" width="16"></a>
                <input id="search" autocapitalize="none" autocomplete="off" autocorrect="off" name="search_query"
                    tabindex="0" type="text" spellcheck="false" placeholder="検索" aria-label="検索" aria-haspopup="false"
                    role="combobox" aria-autocomplete="list" dir="ltr">
                <input name="submit" type="submit" value="検索">
                <input type="hidden" name="tag" value="">
            </form>
        </div>
        <div class="space"></div>
        <div class="form">
            <form method="get" action="https://play.google.com/store/search" target="_blank">
                <img src="https://ssl.gstatic.com/android/market_images/web/favicon.ico" width="16">
                <input name="q" type="text" placeholder="検索">&nbsp;
                <input name="submit" type="submit" value="検索">
            </form>
        </div>
    </div>

    <div class="main"></div>

    <div class="area">

        <input type="radio" name="tab_name" id="tab1" checked>
        <label class="tab_class" for="tab1">Main</label>
        <div class="content_class">
            <a href="http://localhost:8080/phpmyadmin/index.php?route=/server/databases">
                <h1>DB設定</h1>
            </a>
        </div>


        <input type="radio" name="tab_name" id="tab2">
        <label class="tab_class" for="tab2">YouTube</label>
        <div class="content_class">
            
            <iframe class="tab" src="https://www.youtube.com/embed/pC5mGB5enkw" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>


        <input type="radio" name="tab_name" id="tab3">
        <label class="tab_class" for="tab3">クレアンスメアード周辺map</label>
        <div class="content_class">
            <iframe class="tab"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.479705394807!2d139.2714409508514!3d35.788155031610465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6019240ff0da5429%3A0x36fafc96857b9d19!2z44Kv44Os44Ki44Oz44K544Oh44Ki44O844OJ!5e0!3m2!1sja!2sjp!4v1634734933902!5m2!1sja!2sjp"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


        <input type="radio" name="tab_name" id="tab4">
        <label class="tab_class" for="tab4">news(予定)</label>
        <div class="content_class">
                <h1>news</h1>
        </div>


        <input type="radio" name="tab_name" id="tab5">
        <label class="tab_class" for="tab5">天気</label>
        <div class="content_class">
                <p><?php echo "発表者 :". $publisher ?></p>
                <p><?php echo "報告日時 :". $publish_time ?></p>
                <p><?php echo "対象地域 :". $area ?></p>
                <p><?php echo "今日の天気 :". $today ?></p>
                <p><?php echo "明日の天気 :". $tomorrow ?></p>
                <p><?php echo "明後日の天気 :". $dayAfterTomorrow ?></p>

        </div>
    </div>


</body>

</html>