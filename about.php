<?php
$title = "Skegon Dance Studio";
$desctiption = "岐阜県山県市を拠点とするSkegon Dance Studioは、経験豊富な講師陣によるダンスレッスン、格安な料金価格で皆様をお待ちしております。";
$fv_title = "スタジオについて";
require_once('header.php');
?>
<div class="about_intro">
        <div class="inner fadein text-center pt-5 pb-5 text-white">
            <h1 class="py-2">Skegon Dance Studio</h1>
            <p class="mb-5">
                岐阜県山県市を拠点とするSkegon Dance Studioは<br class="pc">
                ストリートダンスシーンにおいて世界大会に出場経験をもち<br class="pc">
                現在も第一線で活躍する個性あふれるインストラクターが指導してくれます。
            </p>
            <div class="row mb-4">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="imgWrap">
                        <a href="/teacher.php">
                            <img src="img/about_left.jpg" class="card-img-top" alt="インストラクターイメージ">
                        </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">経験豊かな講師陣</h5>
                      <p class="card-text">Skegon Dance Studioでは経験豊かな<br class="pc">講師陣を揃え初めてダンスを習う人や<br class="pc">経験者まで幅広く育成・指導を行っています。</p>
                      <a href="/teacher.php" class="px-5 py-2 btn btn-outline-info">詳細</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="imgWrap">
                        <a href="/price.php">
                            <img src="img/about_right.jpg" class="card-img-top" alt="格安プランイメージ">
                        </a>
                    </div> 
                    <div class="card-body">
                        <h5 class="card-title">格安なレッスン</h5>
                        <p class="card-text">豊富なレッスン量からお好きな<br class="pc">曜日・時間を選択して受講いただけます。<br class="pc">格安な料金設定で気軽に始めることができます。</p>
                        <a href="/price.php" class="px-5 py-2 btn btn-outline-info">詳細</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="about_gallary">
        <div class="inner fadein text-center py-5 text-white">
            <h3 class="py-3">Gallary</h3>
            <p class="mb-2">
                ダンススタジオの様子やイベントででの風景を眺めることができます<br>
            </p>
            <section id="slideshow">
                <div class="entire-content">
                  <div class="content-carrousel">
                    <figure class="shadow"><img src="./img/gallary/pic1.jpg"/></figure>
                    <figure class="shadow"><img src="./img/gallary/pic2.jpg"/></figure>
                    <figure class="shadow"><img src="./img/gallary/pic3.jpg"/></figure>
                    <figure class="shadow"><img src="./img/gallary/pic4.jpg"/></figure>
                    <figure class="shadow pc"><img src="./img/gallary/pic5.jpg"/></figure>
                    <figure class="shadow pc"><img src="./img/gallary/pic6.jpg"/></figure>
                    <figure class="shadow pc"><img src="./img/gallary/pic7.jpg"/></figure>
                    <figure class="shadow pc"><img src="./img/gallary/pic8.jpg"/></figure>
                    <figure class="shadow pc"><img src="./img/gallary/pic9.jpg"/></figure>
                  </div>
                </div>
              </section>
              <a href="/gallary.php" class="px-5 py-2 btn btn-outline-info">詳細</a>
        </div>
    </div>
<?php
require_once('footer.php');
?>
