<?php
#
# The string form view file for presenting the string form.
# Copyright 2020 Christopher Reilly
#
$expandoSaltField = makeExpandoPart('InputSalt','Salt','');
if (isset($RESULT['salt'])) {
    $expandoSaltField['initialValue'] = $RESULT['salt'];
}
echo '<form action="process/process-string-form.php" method="post"'.
'name="ProcessString" id="ProcessString">';
echo '<p class="primary">Enter a string</p>';
echo '<fieldset class="primary">';
echo '<div class="inline container">';
if (isset($RESULT['original_text'])) {
    echo '<input name="InputText" id="InputText" type="text" class="primary"'.
        'value="'.$RESULT['original_text'].'"/>';
} else {
    echo '<input name="InputText" id="InputText" type="text" class="primary"'.
        'value=""/>';
}
echo '<br/>';
echo '<label for="InputText">Text</label>';
echo '</div>';

printExpandoPart($expandoSaltField);

echo '<div class="inline container">';
echo '<button name="Process" id="Process" class="primary" type="submit">'.
'process</button>';
echo '<br/>';
echo '<label for="Process">&nbsp;</label>';
echo '</div>';
echo '</fieldset>';
echo '</form>';
