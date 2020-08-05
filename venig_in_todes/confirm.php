<?php
$name = isset($_POST["name"])? $_POST["name"] : "";
$furigana = isset($_POST["furigana"])? $_POST["furigana"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$email1 = isset($_POST["email1"])? $_POST["email1"] : "";
$email2 = isset($_POST["email2"])? $_POST["email2"] : "";
$schedule = isset($_POST["schedule"])? $_POST["schedule"] : "";
$number_of_seat = isset($_POST["number_of_seat"])? $_POST["number_of_seat"] : "";
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

<!--ハンバーガーメニュー-->
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
     <h1>申込フォーム</h1>
     <form action="complete.php" method="post" id="contact">
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
      <input type="hidden" name="furigana" value="<?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?>">
      <input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?>">
      <input type="hidden" name="email1" value="<?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?>">
      <input type="hidden" name="email2" value="<?php echo htmlspecialchars($email2,ENT_QUOTES,"UTF-8"); ?>">
      <input type="hidden" name="schedule" value="<?php echo htmlspecialchars($schedule,ENT_QUOTES,"UTF-8"); ?>">
      <input type="hidden" name="number_of_seat" value="<?php echo htmlspecialchars($number_of_seat,ENT_QUOTES,"UTF-8"); ?>">
      <dl>
       <dt>お名前</dt>
       <dd><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></dd>
       <dt>フリガナ</dt>
       <dd><?php echo htmlspecialchars($furigana,ENT_QUOTES,"UTF-8"); ?></dd>
       <dt>電話番号</dt>
       <dd><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?></dd>
       <dt>メールアドレス</dt>
       <dd><?php echo htmlspecialchars($email1,ENT_QUOTES,"UTF-8"); ?></dd>
       <dt>メールアドレス(確認)</dt>
       <dd><?php echo htmlspecialchars($email2,ENT_QUOTES,"UTF-8"); ?></dd>
       <dt>希望公演</dt>
       <dd><?php echo htmlspecialchars($schedule,ENT_QUOTES,"UTF-8"); ?></dd>
       <dt>枚数</dt>
       <dd><?php echo htmlspecialchars($number_of_seat,ENT_QUOTES,"UTF-8"); ?></dd>
      </dl>
      <div id="button_box">
       <input type="button" value="戻る" onClick="history.back()">
       <input type="submit" value="送信">
      </div>
     </form>
    </section>
   </div>
  </article>

 </main>
 <footer>
  <small>舞台「Venig in Todes ヴェニスに死す」　2020年5月　人見記念講堂<br>Copyright&copy;2020 「Venig in Todes ヴェニスに死す」  All rights reserved.</small>
 </footer>
</body>
</html>
