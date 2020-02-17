<?php
#
# The string form view file for presenting the string form.
# Copyright 2020 Christopher Reilly
#
$expandoSaltField = makeExpandoPart('InputSalt','Salt','');
if (isset($RESULT['salt'])) {
  $expandoSaltField['initialValue'] = $RESULT['salt'];
}
?>
  <form action="process/process-string-form.php" method="post" name="ProcessString" id="ProcessString" value="1">
  <p class="primary">
    Enter a string
  </p>
  <fieldset class="primary">
      <?php
        echo '<div class="inline container">';
        if (isset($RESULT['text'])) {
          echo '<input name="InputText" type="text" class="primary" value="'.$RESULT['text'].'"/>';
        } else {
          echo '<input name="InputText" type="text" class="primary" value=""/>';
        }
        echo '<br/>';
        echo '<label for="InputText">Text</label>';
        echo '</div>';

        printExpandoPart($expandoSaltField);

        echo '<div class="inline container">';
        echo '<button name="Process" class="primary" type="submit" formenctype="multipart/formdata">process</button>';
        echo '<br/>';
        echo '<label for="Process">&nbsp;</label>';
        echo '</div>';
      ?>
      </fieldset>
  </form>
