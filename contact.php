<?php
$title = "お問い合わせ";
$description = "岐阜県山県市を拠点とするSkegon Dance Studioでの体験予約、ダンスに関すること、その他質問を受付しております。";
$fv_title = "お問い合わせ";
require_once('header.php');

function e(string $str,string $charset = 'UTF-8'):string {
    return htmlspecialchars($str,ENT_QUOTES | ENT_HTML5, $charset);
}

$err_msg = '';
$complete_msg = '';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $name = '';
    $email = '';
    $tel = '';
    $content = '';
}else {
    $name = e($_POST['name']);
    $email = e($_POST['email']);
    $tel = e($_POST['tel']);
    $content = e($_POST['content']);

    if($name == '' || $email == '' || $tel == '' || $content == '') {
        $err_msg = '送信に失敗しました。全ての項目を入力してください';
    }

    if($err_msg == '') {
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = 'hirotaka5314@gmail.com';
        $subject = "お問い合わせ";

        $headers = '';
        $headers .= "Content-Type: text/plain \r\n";
        $headers .= "Return-Path: " . $email . " \r\n";
        $headers .= "From: " . $name ." \r\n";
        $headers .= "Sender: " . $name ." \r\n";
        $headers .= "Reply-To: " . $email . " \r\n";
        $headers .= "Organization: " . $name . " \r\n";
        $headers .= "X-Sender: " . $email . " \r\n";
        $headers .= "X-Priority: 3 \r\n";

        $content .= "\r\n\r\n" . $name . $tel;


        mb_send_mail($to, $subject, $content, $headers);

        $complete_msg = '送信完了致しました';

        $name = '';
        $email = '';
        $tel = '';
        $content = '';
    
    }
}

?>
    <?php if($err_msg != ''): ?>
        <div class="alert alert-danger" style="position: absolute; top: 10px; left: 0; right: 0;">
            <?php echo $err_msg; ?>
        </div>
    <?php endif; ?>
    <?php if($complete_msg != ''): ?>
        <div class="alert alert-success" style="position: absolute; top: 10px; left: 0; right: 0;">
            <?php echo $complete_msg; ?>
        </div>
    <?php endif; ?>
    <div id="contact" style="background:  #222831;">
        <div class="inner fadein text-center pt-5 pb-5 text-white">
            <h3 class="py-3">お問い合わせ</h3>
            <p class="mb-5">体験レッスンの受付、その他質問など<br>お気軽にお問い合わせください</p>
            <form method="POST" action="/contact.php">
                <div class="form-group">
                    <input type="input" name="name" value="<?php echo $name; ?>" class="form-control" id="name" placeholder="(受講者の）お名前">
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="メールアドレス">
                </div>
                <div class="form-group">
                    <input name="tel" value="<?php echo $tel; ?>" type="tel" class="form-control" id="tel" placeholder="電話番号">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control" id="content" rows="5" placeholder="お問い合わせ内容"><?php echo $content; ?></textarea>
                </div>
                <button type="submit" style="width: 120px;" class="btn btn-outline-info">送信</button>
            </form>
        </div>
    </div>
<?php
require_once('footer.php');
?>
