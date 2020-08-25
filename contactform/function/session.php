<?php
if ( !empty($clean['btn_confirm'])){

  $error = validation($clean);
  if (empty($error)) {
    $page_flag = 1;

    //セッションの書き込み
    session_start();
    $_SESSION['page'] = true;
  }


} elseif ( !empty($clean['btn_submit'])){

  session_start();
  if ( !empty($_SESSION['page']) && $_SESSION['page'] === true) {

    //セッションの削除
    unset($_SESSION['page']);
    $page_flag = 2;

  } else {

    $page_flag = 0;

  }
}
?>
