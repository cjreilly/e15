<?php
include_once 'NumberProcessor.php';
#
# A library of string process functions.
# Copyright 2020 Christopher Reilly
#

class StringProcessor
{
# The original string text from class construction
    private $originalString;
#
# Class constructor
#
    public function __construct($str)
    {
        $this->originalString = $str;
    }
#
# Return the original string
# return: original string from class construction
#
    public function getString()
    {
        return $this->originalString;
    }
#
# Count the number of vowels in a string.
# return: the number of vowels
#
    public function vowelCount()
    {
        $vowels=array("A","E","I","O","U");
        $count=0;
        if (!is_string($this->originalString)) {
            return $count;
        }
        $index=0;
        while ($index < strlen($this->originalString)) {
            if (in_array($this->originalString[$index], $vowels)) {
                $count=$count+1;
            }
            $index++;
        }
        return $count;
    }
# 
# Increment all characters in a string by 1.
# return: a copy of the string with characters shifted by 1
#
    public function shift()
    {
        $result="";
        if (!is_string($this->originalString)) {
            return $result;
        }
        $index=0;
        while ($index < strlen($this->originalString)) {
            $result.=chr(ord($this->originalString[$index])+1);
            $index++;
        }
        return $result;
    }
#
# Filter all non-alphabetic characters from a string.
# return; a copy of the string with all non-alphabetic characters removed.
#
    public function alphabeticFilter()
    {
        $result="";
        $index=0;
        while ($index < strlen($this->originalString)) {
            $order=ord($this->originalString[$index]);
            $NP = new NumberProcessor($order);
            if ($NP->inRange(65, 90) || $NP->inRange(97, 122)) {
                $result.=$this->originalString[$index];
            }
            $index++;
        }
        return $result;
    }
#
# Filter all non-alphanumeric characters from a string.
# return; a copy of the string with all non-alphanumeric characters removed.
#
    public function stringAlphanumericFilter()
    {
        $result="";
        $index=0;
        while ($index < strlen($this->originalString)) {
            $order=ord($this->originalString[$index]);
            $NP = new NumberProcessor($order);
            if ($NP->inRange(65, 90) || $NP->inRange(97, 122) ||
                    $NP->inRange(48, 57)) {
                $result.=$this->originalString[$index];
            }
            $index++;
        }
        return $result;
    }
}

