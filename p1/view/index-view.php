<?php
#
# The primary view file for the main directory index.
# Copyright 2020 Christopher Reilly
#

require "view/parts/expando-part.php";
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <link rel="stylesheet" href="css/style.css">
  <script src="view/index-script.js"></script>

  <title><?php echo $DOCUMENT_TITLE; ?></title>
  <meta charset='utf-8'>

</head>

<body>
  <?php
  require "view/header-view.php";
  ?>
  <hr class="break">
  <?php
  require "view/string-form-view.php";
  if (isset($RESULT)) {
    require "view/result-view.php";
  }
  ?>
  <?php require "footer-view.php"; ?>
</body>
</html>
