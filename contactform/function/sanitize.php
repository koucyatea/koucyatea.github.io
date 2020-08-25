<?php
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {

      $clean[$key] = htmlspecialchars($value, ENT_QUOTES);

    }
  }
?>
