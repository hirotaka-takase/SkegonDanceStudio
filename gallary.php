<?php
$title = "ギャラリー";
$description = "岐阜県山県市を拠点とするSkegon Dance Studioでの普段の様子やレッスン風景、イベントの様子などを写真で公開しています。あなたも、Skegon Dance Studioでダンスを始めてみませんか？";
$fv_title = "ギャラリー";
require_once('header.php');
?>
    <div id="gallary" style="background:  #222831;">
        <div class="inner fadein  pt-5 pb-5 text-white">
            <h3 class="py-3 text-center">Gallary</h3>
            <div class="d-flex flex-wrap justify-content-center wrapper">
                <?php for($i = 1; $i <= 11; $i++) { ?>
                <div class="wrapper-item">
                    <img src="./img/gallary/pic<?= $i ?>.jpg" width="100%">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php
require_once('footer.php');
?>
