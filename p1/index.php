<?php
<<<<<<< HEAD
#
# A directory index file for the CSCI E-15 P1 application.
# Copyright 2020 Christopher Reilly
#
#

session_start();
require 'controller/index-controller.php';


function isPalindrome($inputString)
{
}

function isBigWord($inputString)
{
    if (strlen($inputString) > 7) {
        return 'Yes';
    } else {
        return 'No';
    }
}

$result1 = isBigWord('cat');
$result2 = isBigWord('mississippi');


# require 'index-view.php';
