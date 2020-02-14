<?php
#
# The primary controller file for the main directory index.
# Copyright 2020 Christopher Reilly
#

#
# Count the number of vowels in a string.
# $str:  the string to process
# return: the number of vowels
#
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
# 
# Increment all characters in a string by 1.
# $str: the string to process
# return: a copy of the string with characters shifted by 1
#
function stringShift($str)
{
  $result="";
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
function inRange($number, $minimum, $maximum)
{
  return ($number <= $maximum && $number >= $minimum);
}
#
# Filter all non-alphabetic characters from a string.
# $str: the string to process
# return; a copy of the string with all non-alphabetic characters removed.
#
function stringAlphabeticFilter($str)
{
  $result="";
  $index=0;
  while ($index < strlen($str)) {
    $order=ord($str[$index]);
    if (inRange($order, 65, 90) || inRange($order, 97, 122)) {
      $result.=$str[$index];
    }
    $index++;
  }
  return $result;
}
#
# Filter all non-alphanumeric characters from a string.
# $str: the string to process
# return; a copy of the string with all non-alphanumeric characters removed.
#
function stringAlphanumericFilter($str)
{
  $result="";
  $index=0;
  while ($index < strlen($str)) {
    $order=ord($str[$index]);
    if (inRange($order, 65, 90) || inRange($order, 97, 122) || inRange($order, 48, 57)) {
      $result.=$str[$index];
    }
    $index++;
  }
  return $result;
}

# The index page title
$INDEX_TITLE="String Processor";
# The index page subtitle
$INDEX_SUBTITLE="CSCI E15";
# The index page author
$AUTHOR="Christopher Reilly";
# The index document title
$DOCUMENT_TITLE=$INDEX_TITLE . " - " . $INDEX_SUBTITLE;

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
  $RESULT['string_encrypted']=crypt($RESULT['text'],stringAlphabeticFilter($_POST['InputSalt']));
}
?>
