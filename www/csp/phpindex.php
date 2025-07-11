<?php
  $cspheader = "Content-Security-Policy:".
               "default-src 'self';".
               "script-src 'self' 'nonce-111-111-111' localhost:3207".
               "";
  header($cspheader);
?>

<?php include 'index.html';?>

