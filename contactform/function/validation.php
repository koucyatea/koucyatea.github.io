<?php
//バリデーションのソース
 function validation($data){

   $error = array();
   //氏名のバリデーション
   if(empty($data['name'])){

     $error[] = '「氏名」が入力されていません。';

   }

   //性別のバリデーション
   if (empty($data['gender'])) {

     $error[] = '「性別」が選択されていません。';

   }

   //メールアドレスのバリデーション
   if (empty($data['email1'])) {

     $error[] = '「メールアドレス」が入力されていません。';

   }elseif( !preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $data['email1']) ) {

    $error[] = '「メールアドレス」は正しい形式で入力してください。';

   }

   //確認用メールアドレスのバリデーション
   if (empty($data['email2'])) {

    $error[] = '「メールアドレス(確認)」が入力されていません。';

   }elseif ($data['email2'] !== $data['email1']) {

    $error[] = '「メールアドレス(確認)」には同じメールアドレスを入力してください。';

   }

   //電話番号のバリデーション
   if (empty($data['tel'])) {

     $error[] = '「電話番号」が入力されていません。';

   }elseif (!preg_match( '/[0-9]/', $data['tel'])) {

     $error[] = '正しい電話番号を入力してください。';

   }

   //郵便番号のバリデーション
   if (empty($data['postal1']) || empty($data['postal2'])) {

     $error[] = '「郵便番号」が入力されていません。';

   }elseif ( !preg_match('/[0-9]{3}/', $data['postal1']) || !preg_match('/[0-9]{4}/', $data['postal2']) ) {

     $error[] = '「郵便番号」は上3ケタ、下4ケタの数字で入力してください。';

   }

   //都道府県のバリデーション
   if ($data['pref'] === 0) {
     $error[] = '「都道府県」が選択されていません。';
   }

   //住所のバリデーション
   if (empty($data['address'])) {
     $error[] = '「住所」が入力されていません。';
   }

   //お問い合わせ内容のバリデーション
   if (empty($data['content'])) {
     $error[] = '「お問い合わせ内容」が入力されていません。';
   }

   //個人情報の取り扱いのバリデーション
   if (empty($data['privacy'])) {
     $error[] = '個人情報の取り扱いについてご確認ください。';
   }

   return $error;
 }
 //バリデーションのソースここまで

?>
