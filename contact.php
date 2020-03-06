<?php
require_once('header.php');
?>
    <div id="contact" style="background:  #222831;">
        <div class="inner fadein text-center pt-5 pb-5 text-white">
            <h3 class="py-3">お問い合わせ</h3>
            <p class="mb-5">体験レッスンの受付、その他質問など<br>お気軽にお問い合わせください</p>
            <form>
                <div class="form-group">
                    <label for="name">(受講者の）お名前</label>
                    <input type="input" class="form-control" id="name">
                </div>
                <div class="form-group">
                <label for="mail">メールアドレス</label>
                    <input type="email" class="form-control" id="mail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="tel">電話番号</label>
                    <input type="input" class="form-control" id="tel">
                </div>
                <div class="form-group">
                    <label for="content">お問い合わせ内容</label>
                    <textarea class="form-control" id="content" rows="5"></textarea>
                </div>
                <button type="submit" style="width: 120px;" class="btn btn-outline-info">送信</button>
            </form>
        </div>
    </div>
<?php
require_once('footer.php');
?>
</body>   
</html>
<script src="js/main.js" type="text/javascript"></script>
