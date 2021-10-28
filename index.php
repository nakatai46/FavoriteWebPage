<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>test</title>

</head>

<body>
    <header>
        <h1>
            <a href="http://home.prograrts.com/top.html#0">よく使うWEBサイト</a>
        </h1>
        <div class="login">
            <button>
                <a href="register.php">ログイン</a>
            </button>
        </div>
    </header>
    <div class="search">
        <div class="form">
            <form method="get" action="http://www.google.co.jp/search" target="_blank">
                <img src="http://www.google.co.jp/favicon.ico" width="16">
                <input type="text" name="q" maxlength="255" value="">
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
                <input type="text" name="search">
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
                <input name="q" type="text">&nbsp;
                <input name="submit" type="submit" value="検索">
            </form>
        </div>
    </div>

    <div class="main"></div>

    <div class="area">

        <input type="radio" name="tab_name" id="tab1" checked>
        <label class="tab_class" for="tab1">Main</label>
        <div class="content_class">
            <a href="http://localhost:8080/phpmyadmin/index.php?route=/server/databases">phpmyadmin</a>
        </div>


        <input type="radio" name="tab_name" id="tab2">
        <label class="tab_class" for="tab2">YouTube</label>
        <div class="content_class">
            <iframe class="tab" src="https://www.youtube.com/embed/5Vr1FODSgVA" title="YouTube video player"
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
        <label class="tab_class" for="tab4">タブ4</label>
        <div class="content_class">
            <iframe class="tab" src="https://github.com/nakatai46/FavoriteWebPage" style="border:0;" allowfullscreen=""
                loading="lazy"></iframe>
        </div>


        <input type="radio" name="tab_name" id="tab5">
        <label class="tab_class" for="tab5">タブ5</label>
        <div class="content_class">
            <p>タブ5のコンテンツを表示します</p>
        </div>
    </div>


</body>

</html>