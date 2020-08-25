<div class="formbox">
<form method="post">
 <dl>
  <dt>氏名</dt>
  <dd>
    <input type="text" name="name" value="<?php if( !empty($clean['name'])){echo $clean['name'];}?>">
  </dd>
  <dt>性別</dt>
  <dd>
    <input type="radio" name="gender" value="male"
     <?php if ( !empty($clean['gender']) && $clean['gender'] === 'male'){echo 'checked';}?>
    >男
    <input type="radio" name="gender" value="female"
     <?php if ( !empty($clean['gender']) && $clean['gender'] === 'female'){echo 'checked';} ?>
    >女
    <input type="radio" name="gender" value="other"
     <?php if ( !empty($clean['gender']) && $clean['gender'] === 'other'){echo 'checked';}?>
    >その他
  </dd>
  <dt>メールアドレス</dt>
  <dd><input type="text" name="email1" value="<?php if( !empty($clean['email1'])){echo $clean['email1'];}?>"></dd>
  <dt>メールアドレス(確認)</dt>
  <dd><input type="text" name="email2" value="<?php if( !empty($clean['email2'])){echo $clean['email2'];}?>"></dd>
  <dt>電話番号(ハイフンなし)</dt>
  <dd><input type="text" name="tel" size="11" maxlength="11" value="<?php if( !empty($clean['tel'])){echo $clean['tel'];}?>"></dd>
  <dt>郵便番号</dt>
  <dd>
   <input type="text" name="postal1" size="3" maxlength="3" value="<?php if( !empty($clean['postal1'])){echo $clean['postal1'];}?>">
   -
   <input type="text" name="postal2" size="4" maxlength="4" value="<?php if( !empty($clean['postal2'])){echo $clean['postal2'];}?>">
  </dd>
  <dt>住所</dt>
  <dd>
   <select name="pref">
     <?php foreach($prefecture as $key => $value):?>
      <option value="<?php echo $key; ?>" <?php if( !empty($clean['pref']) && $clean['pref'] == $key ){echo 'selected';}?>><?php echo $value; ?></option>
    <?php endforeach; ?>
  </select><br>
   <input type="text" name="address" value="<?php if( !empty($clean['address'])){echo $clean['address'];}?>">
  </dd>
  <dt>お問い合わせ内容</dt>
  <dd><textarea name="content"><?php if( !empty($clean['content'])){echo $clean['content'];}?></textarea></dd>
  <dt>個人情報の取り扱い</dt>
  <dd><input type="checkbox" name="privacy" value="同意する">同意する</dd>
 </dl>
 <input type="submit" name="btn_confirm" value="入力内容確認">
</form>
</div>
