<?php
 ini_set('display_errors', 1);
 error_reporting( E_ALL );

 //変数の初期化
 $page_flag = 0;
 $clean = array();
 $error = array();

 //サニタイズ
 require('function/sanitize.php');
 //バリデーション
 require('function/validation.php');
 //都道府県の連想配列
 require_once('function/prefecture.php');
 //セッション処理
 require_once('function/session.php');
 
?>

<!doctype>
<html lang="ja">
<head>

  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>問い合わせフォーム</title>

</head>

<body>
  <div id="wrapper">
    <header>
     <h1>問い合わせフォーム</h1>
    </header>

    <main>
      <section>

      <?php if($page_flag === 1): ?>

        <!--確認画面ソース-->
        <?php include('form/confirm.php'); ?>

      <?php elseif($page_flag === 2): ?>

        <!--データベース登録処理-->
        <?php require_once('function/connection.php'); ?>

        <p>送信が完了しました。</p>

      <?php else: ?>

        <!--エラ〜メッセージ生成-->
        <?php require('function/error.php'); ?>

        <!--入力画面ソース-->
        <?php include('form/contact.php'); ?>

      <?php endif; ?>


      </section>
    </main>
  </div>
</body>

</html>
