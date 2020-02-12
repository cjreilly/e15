<?php
$DOCUMENT_TITLE=$INDEX_TITLE . " - " . $INDEX_SUBTITLE;
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <link rel="stylesheet" href="css/style.css"></style>

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
  <p class="primary">
      <?php echo '<input name="InputText" type="text" class="primary" value="';
            echo $text;
            echo '"/>';
      ?>
      <button name="Process" class="primary" formtarget="_self" type="submit" formenctype="multipart/formdata">process</button>
  </p>
  <div class="container">
    <p class="secondary aligned"><?php echo $text; ?></p>
  </div>
  <?php
  if (isset($RESULT['vowel_count'])) {
    echo "<div class='container'>";
    echo "<p class='secondary aligned'>";
    echo $RESULT['vowel_count'];
    echo " vowels</p>";
    echo "</div>";
  }
  ?>
  <?php
  if (isset($RESULT['string_shift'])) {
    echo "<div class='container'>";
    echo "<input class='read aligned' type='text' readonly value='".$RESULT['string_shift']."'\>";
    echo "</div>";
    echo "<div class='container'>";
    echo "<p class='secondary aligned'>";
    echo " (shifted)</p>";
    echo "</div>";
  }
  ?>
  <?php
    if (isset($RESULT['palindrome'])) {
      echo "<div class='container'>";
      if ($RESULT['palindrome'] === TRUE) {
        echo '<p class="secondary aligned positive-result">Palindrome</p>';
      } elseif ($RESULT['palindrome'] === FALSE) {
        echo '<p class="secondary aligned negative-result">Not a Palindrome</p>';
      }
      echo "</div>";
    }
  ?>
  </form>

</body>
</html>
