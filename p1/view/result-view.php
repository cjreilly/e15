<?php
#
# The result view file for displaying string form results.
# Copyright 2020 Christopher Reilly
#
if (isset($RESULT['text'])) {
    echo "<fieldset class='container'>";
    echo "<p class='secondary aligned'>";
    echo "Results for &quot;".$RESULT['text']."&quot;";
    echo "</fieldset>";
}
if (isset($RESULT['palindrome'])) {
    echo "<fieldset class='container'>";
    if ($RESULT['palindrome'] === TRUE) {
        echo '<p class="secondary aligned positive-result">Palindrome</p>';
    } elseif ($RESULT['palindrome'] === FALSE) {
        echo '<p class="secondary aligned negative-result">';
        echo 'Not a Palindrome';
        echo '</p>';
    }
    echo "</fieldset>";
}
if (isset($RESULT['vowel_count'])) {
    echo "<fieldset class='container' name='NumberOfVowels'>";
    echo "<p class='secondary aligned'>";
    echo $RESULT['vowel_count'];
    echo " vowels</p>";
    echo "</fieldset>";
}
if (isset($RESULT['string_shift'])) {
    echo "<fieldset class='container'>";
    echo "<input class='read aligned' type='text' readonly value='";
    echo $RESULT['string_shift'];
    echo "'\>";
    echo "<p class='secondary aligned'>";
    echo " (shifted)</p>";
    echo "</fieldset>";
}
if (isset($RESULT['string_hashed'])) {
    echo "<fieldset class='container'>";
    echo "<input class='read aligned' type='text' readonly value='";
    echo $RESULT['string_hashed'];
    echo "'\>";
    echo "<p class='secondary aligned'>";
    echo " (md5 hash)</p>";
    echo "</fieldset>";
}
