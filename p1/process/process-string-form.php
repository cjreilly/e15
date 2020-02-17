<?php
#
# The form processor for the string form.
# Copyright 2020 Christopher Reilly
#
require 'process-library.php';
$session = session_start(array("session.cache_expire"=>1,"session.gc_maxlifetime"=>1));

# The index controller result
$RESULT=array();
# The input text
$RESULT['palindrome'] = 0;

if (array_key_exists("InputText", $_POST)) {
  $RESULT['text']=stringAlphabeticFilter($_POST['InputText']);
  $transformed_text=stringAlphabeticFilter(strtoupper($RESULT['text']));
  $revtext=strrev($transformed_text);
  if ($transformed_text == $revtext) {
    $RESULT['palindrome']=TRUE;
  }
  else {
    $RESULT['palindrome']=FALSE;
  }
  $RESULT['vowel_count']=vowelCount($transformed_text);
  $RESULT['string_shift']=stringShift($RESULT['text']);
  $RESULT['salt']=stringAlphabeticFilter($_POST['InputSalt']);
  $RESULT['string_hashed']=md5(md5($RESULT['text']).$RESULT['salt']);
}

$_SESSION['result'] = $RESULT;
header('Location: ../');
?>
