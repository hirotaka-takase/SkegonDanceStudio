<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? "Skegon Dance Studio" ?></title>
    <meta name="description" content="<?=$description ?? "Skegon Dance Studioは岐阜県山県市を拠点とするDance Studioです。ストリートダンスシーンにおいて世界大会に出場経験をもち、現在も第一線で活躍する個性あふれるインストラクターが指導してくれます。" ?>" />
    <meta property="og:url" content="https://skegondancestudio.com/" />
    <meta property="og:title" content="SkegonDanceStudio" />
    <meta property="og:description" content="Skegon Dance Studioは岐阜県山県市を拠点とするDance Studioです。ストリートダンスシーンにおいて世界大会に出場経験をもち、現在も第一線で活躍する個性あふれるインストラクターが指導してくれます。" />
    <meta property="og:image" content="./img/logo.jpg" />
    <meta property="og:site_name" content="SkegonDanceStudio" />
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@^2.0.0"></script>
    <script src="js/parallax.min.js"></script>
</head>
<body class="wf-sawarabigothic" style="posision: relative;">
    <a class="menu">
        <span class="menu__line menu__line--top"></span>
        <span class="menu__line menu__line--center"></span>
        <span class="menu__line menu__line--bottom"></span>
    </a>
    <nav class="gnav">
        <div class="gnav__wrap">
            <ul class="gnav__menu">
                <li class="gnav__menu__item"><a href="/about.php">スタジオ</a></li>
                <li class="gnav__menu__item"><a href="/teacher.php">インストラクター</a></li>
                <li class="gnav__menu__item"><a href="/price.php">スケジュール・<br>料金</a></li>
                <li class="gnav__menu__item"><a href="/gallary.php">写真</a></li>
                <li class="gnav__menu__item"><a href="/contact.php">お問い合わせ</a></li>
            </ul>
        </div>
    </nav>
    <div class="fv parallax-window">
        <p class="px-4"><a href="/"><img src="img/logo.png" alt="スタジオロゴ" width="130" height="90"></a></p>
        <div class="py-5 d-flex justify-content-center align-items-end">
            <div class="text-center pt-5">
                <h2 class="mb-5 text-white animated flipInX animation-speed"><?=$fv_title ?? "Skegon Dance Studio" ?></h2>
                <a class="btn px-5 py-3 btn-info btn-lg" href="/contact.php">体験予約</a>    
            </div>
        </div>
        <div class="address text-white">
            <div class="text-center">
                <p class="lead mb-1">山県スタジオ</p>
                <p><a target="_blank" rel=”noopener” href="https://goo.gl/maps/xd8Y9fUtqoXfDzBTA">山県市総合体育館(山県市高木1675)</a></p>
            </div>
            <div class="text-center">
                <p class="lead mb-1">北方スタジオ</p>
                <p><a target="_blank" rel=”noopener” href="https://goo.gl/maps/xTFaEojWkRoD5Fjk8">北方ボクシングジム(本巣郡北方町北方1908-1)</a></p>
            </div>        </div>
        <p class="page-top">
            <a href="#top">
                <span>&uarr;<br>トップ</span>
            </a>
        </p>
    </div>
