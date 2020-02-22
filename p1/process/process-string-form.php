<?php
include_once 'StringProcessor.php';

#
# The form processor for the string form.
# Copyright 2020 Christopher Reilly
#
$session = session_start(
        array(
            "session.cache_expire"=>1,
            "session.gc_maxlifetime"=>1
            ));

# The index controller result
$RESULT=array();
# The input text
$RESULT['palindrome'] = 0;

if (array_key_exists("InputText", $_POST)) {
    $inputSP = new StringProcessor($_POST['InputText']);
    $RESULT['original_text']=$inputSP->getString();
    $RESULT['text']=$inputSP->alphabeticFilter();
    $transformedSP = new StringProcessor(strtoupper($RESULT['text']));
    $saltSP = new StringProcessor($_POST['InputSalt']);
    if ($transformedSP->getString() == strrev($transformedSP->getString())) {
        $RESULT['palindrome']=TRUE;
    }
    else {
        $RESULT['palindrome']=FALSE;
    }
    $RESULT['vowel_count']=$transformedSP->vowelCount();
    $RESULT['string_shift']=$transformedSP->shift();
    $RESULT['salt']=$saltSP->alphabeticFilter();
    $RESULT['string_hashed']=md5(md5($RESULT['text']).$RESULT['salt']);
}

$_SESSION['result'] = $RESULT;

header('Location: ../');
?>
