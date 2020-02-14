<?php
#
# The primary view file for the main directory index.
# Copyright 2020 Christopher Reilly
#
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <link rel="stylesheet" href="css/style.css"></style>
  <script type="text/javascript" src="view/index-script.js"></script>

  <title><?php echo $DOCUMENT_TITLE; ?></title>
  <meta charset='utf-8'>

</head>

<body>

  <h1 class="title"><?php echo $INDEX_TITLE; ?></h1>
  <h2 class="title"><?php echo $INDEX_SUBTITLE; ?></h2>
  <h2 class="title author"><?php echo $AUTHOR; ?></h2>

  <hr class="break"></hr>
  <form action="." method="post" name="ProcessString" id="ProcessString" value="1">
  <p class="primary">
    Enter a string
  </p>
  <fieldset class="primary">
      <?php
        echo '<div class="inline container"><input name="InputText" type="text" class="primary" value="'.$RESULT['text'].'"/><br/><label for="InputText">Text</label></div>';
        echo '<div class="inline contracted expando container" onclick="toggleExpando(this);"><input name="InputSalt" type="text" class="primary" value="'.$RESULT['salt'].'" onclick="event.cancelBubble=true;"/><br/><label for="InputSalt">Salt</label></div>';
        echo '<div class="inline container"><button name="Process" class="primary" formtarget="_self" type="submit" formenctype="multipart/formdata">process</button><br/><label for="Process">&nbsp;</label></div>';
      ?>
      </fieldset>
  <?php
  if (isset($RESULT['text'])) {
    echo "<fieldset class='container'>";
    echo "<p class='secondary aligned'>";
    echo "Results for &quot;".$RESULT['text']."&quot;";
    echo "</fieldset>";
  }
  ?>
  <?php
    if (isset($RESULT['palindrome'])) {
      echo "<fieldset class='container'>";
      if ($RESULT['palindrome'] === TRUE) {
        echo '<p class="secondary aligned positive-result">Palindrome</p>';
      } elseif ($RESULT['palindrome'] === FALSE) {
        echo '<p class="secondary aligned negative-result">Not a Palindrome</p>';
      }
      echo "</fieldset>";
    }
  ?>
  <?php
  if (isset($RESULT['vowel_count'])) {
    echo "<fieldset class='container' name='NumberOfVowels'>";
    echo "<p class='secondary aligned'>";
    echo $RESULT['vowel_count'];
    echo " vowels</p>";
    echo "</fieldset>";
  }
  ?>
  <?php
  if (isset($RESULT['string_shift'])) {
    echo "<fieldset class='container'>";
    echo "<input class='read aligned' type='text' readonly value='".$RESULT['string_shift']."'\>";
    echo "<p class='secondary aligned'>";
    echo " (shifted)</p>";
    echo "</fieldset>";
  }
  ?>
  <?php
  if (isset($RESULT['string_encrypted'])) {
    echo "<fieldset class='container'>";
    echo "<input class='read aligned' type='text' readonly value='".$RESULT['string_encrypted']."'\>";
    echo "<p class='secondary aligned'>";
    echo " (encrypted)</p>";
    echo "</fieldset>";
  }
  ?>
  </form>
  <?php require "footer-view.php"; ?>
</body>
</html>
