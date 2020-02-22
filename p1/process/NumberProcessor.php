<?php
#
# A library of number process functions.
# Copyright 2020 Christopher Reilly
#
class NumberProcessor
{
# The original number in class construction
    private $originalNumber;
#
# Class constructor
# $num: the number that is processed
#
    public function __construct($num)
    {
        $this->originalNumber=$num;
    }
#
# Determine if a number is within a range.
# $number: the number to process
# $minimum: the inclusive minimum value
# $maximum: the inclusive maximum value
#
    public function inRange($minimum, $maximum)
    {
        return ($this->originalNumber <= $maximum &&
                $this->originalNumber >= $minimum);
    }
}
