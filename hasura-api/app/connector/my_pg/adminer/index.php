<?php
  if(!count($_GET)) {
    $_POST['auth'] = [
      'server' => $_ENV['ADMINER_DEFAULT_SERVER'],
      'username' => $_ENV['ADMINER_DEFAULT_USERNAME'],
      'password' => $_ENV['ADMINER_DEFAULT_PASSWORD'],
      'driver' => $_ENV['ADMINER_DEFAULT_DRIVER'],
      'db'    => $_ENV['ADMINER_DEFAULT_DB'],
    ];
  }
  include './adminer.php';
?>
