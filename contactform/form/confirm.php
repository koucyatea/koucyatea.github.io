<div class="formbox">
  <form method="post">
   <dl>
    <dt>氏名</dt>
    <dd><?php echo $clean['name']; ?></dd>
    <dt>性別</dt>
    <dd>
      <?php if($clean['gender'] === 'male'){
          echo '男';
      }else if($clean['gender'] === 'female'){
          echo '女';
      }else{
        echo 'その他';
      }
      ?>
    </dd>
    <dt>メールアドレス</dt>
    <dd><?php echo $clean['email1']; ?></dd>
    <dt>メールアドレス(確認)</dt>
    <dd><?php echo $clean['email2']; ?></dd>
    <dt>電話番号(ハイフンなし)</dt>
    <dd><?php echo $clean['tel']; ?></dd>
    <dt>郵便番号</dt>
    <dd><?php echo $clean['postal1']; ?>-<?php echo $clean['postal2']; ?></dd>
    <dt>住所</dt>
    <dd>
      <?php echo $prefecture[$clean['pref']]; ?>
      <?php echo $clean['address']; ?>
    </dd>
    <dt>お問い合わせ内容</dt>
    <dd><?php echo $clean['content']; ?></dd>
    <dt>個人情報の取り扱い</dt>
    <dd><?php echo $clean['privacy']; ?></dd>
   </dl>
   <div id="btn_box">
   <input type="submit" name="btn_back" value="戻る">
   <input type="submit" name="btn_submit" value="送信">
   </div>
   <input type="hidden" name="name" value="<?php echo $clean['name']; ?>">
   <input type="hidden" name="gender" value="<?php echo $clean['gender']; ?>">
   <input type="hidden" name="email1" value="<?php echo $clean['email1']; ?>">
   <input type="hidden" name="email2" value="<?php echo $clean['email2']; ?>">
   <input type="hidden" name="tel" value="<?php echo $clean['tel']; ?>">
   <input type="hidden" name="postal1" value="<?php echo $clean['postal1']; ?>">
   <input type="hidden" name="postal2" value="<?php echo $clean['postal2']; ?>">
   <input type="hidden" name="pref" value="<?php echo $clean['pref']; ?>">
   <input type="hidden" name="address" value="<?php echo $clean['address']; ?>">
   <input type="hidden" name="content" value="<?php echo $clean['content']; ?>">
  </form>
</div>
