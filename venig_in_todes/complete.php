<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
 
//データ格納
 $to = $_POST["email1"];//メール送信先の設定
 $subject = "チケット申込み完了";//メールの件名
 $header = "From: info@tdp.com";//送信元アドレス
 $header .= "\n";//改行
 $header .= "Bcc:tdp@sairafactory.com";//確認メール管理者受信用
 $message = "チケットの申込みを受け付けました。" . "\n" .
 "当落については追って連絡致します。" . "\n" . "\n" .
 "お名前：" . $_POST["name"] . "\n" .
 "ふりがな：" . $_POST["furigana"] . "\n" .
 "電話番号：" . $_POST["tel"] . "\n" .
 "メールアドレス：" . $_POST["email1"] . "\n" .
 "希望公演：" . $_POST["schedule"] . "\n" . 
 "枚数：" . $_POST["number_of_seat"];
 
//メール送信
  mb_send_mail($to, $subject, $message, $header);

?>

<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="robots" content="noindex nofollow">
<meta name="Keywords" content="ヴェニスに死す,ベニスに死す,舞台,東京,人見記念講堂,トーマス・マン,アーロン・アンドレ・ゼン,大塚治夫">
<meta name="Description" content="2020年9月公演予定の舞台「Venig in Todes　ヴェニスに死す」のオフィシャルサイトです。公演情報やチケットの販売を行なっています。">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.typekit.net/hcc8xjj.css">
<title>舞台「Venig in Todes ヴェニスに死す」オフィシャルサイト</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- ハンバーガーメニュー -->
<script>
 $(function(){
    $('.btn_hamburger').click(function(){
        $('.btn_hamburger,nav').toggleClass('is-active');
    });
    
    $('nav,nav a').click(function(){
        $('.btn_hamburger,nav').removeClass('is-active');
    });
 });
</script>

<!--トップへ戻るボタンの表示-->
<script>
$(function(){
    $(window).scroll(function(){
        var TargetPos = $('#introduction').offset().top-60;
        var ScrollPos = $(window).scrollTop();
        if(ScrollPos >= TargetPos){
            $('#top_button').fadeIn();
        }else{
            $('#top_button').fadeOut();
        }
    });
});
</script>

</head>

<body id="contact_page">

 <header>
  <div id="nav_area">
   <div class="btn_hamburger">
    <div class="line line_01"></div>
    <div class="line line_02"></div>
    <div class="line line_03"></div>
   </div>
   <nav>
    <ul>
     <li><a href="index.html">Top</a></li>
     <li><a href="index.html#introduction">Introduction</a></li>
     <li><a href="index.html#story">Story</a></li>
     <li><a href="index.html#cast">Cast</a></li>
     <li><a href="index.html#staff">STAFF</a></li>
     <li><a href="index.html#ticket_schedule">Ticket & Schedule</a></li>
    </ul>
   </nav>
  </div>
  <div id="sub-visual">
   <h1><img src="img/subvisual.jpg" alt="Reserving Ticket 舞台「Venig in Todes ヴェニスに死す」チケット申し込み"/></h1>
  </div>
 </header>
 
 <div id="top_button"><a href="#">▲</a></div>
 
 <main>
  <article>
   <div class="inner">
    <section>
     <h1>申込み完了</h1>
      <p>チケットの申込みを完了しました。</p>
      <p>ありがとうございました。</p>
    </section>
   </div>
  </article>

 </main>
 <footer>
  <small>舞台「Venig in Todes ヴェニスに死す」　2020年5月　人見記念講堂<br>Copyright&copy;2020 「Venig in Todes ヴェニスに死す」  All rights reserved.</small>
 </footer>
</body>
</html>
