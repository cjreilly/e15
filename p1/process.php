<?php

session_start();

$inputString = $_POST['inputString'];

function isPalindrome($inputString)
{
    return 'Yes';
}

function isBigWord($inputString)
{
    if (strlen($inputString) > 7) {
        return 'Yes';
    } else {
        return 'No';
    }
}

$_SESSION['results'] = [
    'isBigWord' => isBigWord($inputString),
    'isPalindrome' => isPalindrome($inputString)
];

header('Location: index.php');

//$_SESSION['isBigWordResult'] = $isBigWordResult;
//$_SESSION['isPalindrome'] = $isPalindrome;
