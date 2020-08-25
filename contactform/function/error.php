<?php if(!empty($error)): ?>
  <ul class="error_list">
    <?php foreach ($error as $key => $value): ?>
      <li><?php echo $value; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
