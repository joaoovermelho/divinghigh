<?php
   $error_url = $_SERVER["REDIRECT_STATUS"] . '/';
   $error_path = $error_url . '.php';

   if ( ! file_exists($error_path)) {
      // this is the default error if a specific e  rror page is not found
      $error_url = 'seui/';
   }

   header('Location: ' . $error_url);
   exit;
?>