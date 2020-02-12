<?php

function vowelCount($str)
{
  $vowels=array("A","E","I","O","U");
  $count=0;
  if (!is_string($str)) {
    return $count;
  }
  $index=0;
  while ($index < strlen($str)) {
    if (in_array($str[$index], $vowels)) {
      $count=$count+1;
    }
    $index++;
  }
  return $count;
}
function stringShift($str)
{
  $vowels=array("A","E","I","O","U");
  $count="";
  if (!is_string($str)) {
    return $result;
  }
  $index=0;
  while ($index < strlen($str)) {
    $result.=chr(ord($str[$index])+1);
    $index++;
  }
  return $result;
}

$INDEX_TITLE="String Processor";
$INDEX_SUBTITLE="CSCI E15";
$AUTHOR="Christopher Reilly";

$DOCUMENT_TITLE=$INDEX_TITLE . " - " . $INDEX_SUBTITLE;

$RESULT=array();
$text="";
$RESULT['palindrome'] = 0;
if (array_key_exists("InputText", $_POST)) {
  $text=$_POST["InputText"];
  $transformed_text=strtoupper($text);
  $revtext=strrev($transformed_text);
  if ($transformed_text == $revtext) {
    $RESULT['palindrome']=TRUE;
  }
  else {
    $RESULT['palindrome']=FALSE;
  }
  $RESULT['vowel_count']=vowelCount($transformed_text);
  $RESULT['string_shift']=stringShift($text);
}
?>
