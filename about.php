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
                岐阜県山県市を拠点とするSkegon Dance Studioは<br>
                ストリートダンスシーンにおいて世界大会に出場経験をもち<br>
                現在も第一線で活躍する個性あふれるインストラクターが指導してくれます。
            </p>
            <div class="row mb-4">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="imgWrap">
                        <a href="/works/SkegonDanceStudio/teacher.php">
                            <img src="img/fv.jpg" class="card-img-top" alt="インストラクターイメージ">
                        </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">経験豊かな講師陣</h5>
                      <p class="card-text">Skegon Dance Studioでは経験豊かな<br>講師陣を揃え初めてダンスを習う人や<br>経験者まで幅広く育成・指導を行っています。</p>
                      <a href="/works/SkegonDanceStudio/teacher.php" class="px-5 py-2 btn btn-outline-info">詳細</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="imgWrap">
                        <a href="/works/SkegonDanceStudio/price.php">
                            <img src="img/fv.jpg" class="card-img-top" alt="格安プランイメージ">
                        </a>
                    </div> 
                    <div class="card-body">
                        <h5 class="card-title">格安なレッスン</h5>
                        <p class="card-text">豊富なレッスン量からお好きな<br>曜日・時間を選択して受講いただけます。<br>格安な料金設定で気軽に始めることができます。</p>
                        <a href="/works/SkegonDanceStudio/price.php" class="px-5 py-2 btn btn-outline-info">詳細</a>
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
                    <figure class="shadow"><img src="https://picsum.photos/200/300"/></figure>
                    <figure class="shadow"><img src="https://picsum.photos/201/300"/></figure>
                    <figure class="shadow"><img src="https://picsum.photos/202/300"/></figure>
                    <figure class="shadow"><img src="https://picsum.photos/203/300"/></figure>
                    <figure class="shadow"><img src="https://picsum.photos/204/300"/></figure>
                    <figure class="shadow"><img src="https://picsum.photos/205/300"/></figure>
                    <figure class="shadow"><img src="https://picsum.photos/206/300"/></figure>
                    <figure class="shadow"><img src="https://picsum.photos/207/300"/></figure>
                    <figure class="shadow"><img src="https://picsum.photos/208/300"/></figure>
                  </div>
                </div>
              </section>
              <a href="/works/SkegonDanceStudio/gallary.php" class="px-5 py-2 btn btn-outline-info">詳細</a>
        </div>
    </div>
<?php
require_once('footer.php');
?>
