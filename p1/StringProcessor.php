<?php

class StringProcessor
{
    # Properties
    private $inputString;

    # Methods
    public function __construct($inputString)
    {
        $this->inputString = $inputString;
    }

    public function isPalindrome()
    {
        # TODO: Write actual palindrome logic
        return 'Yes';
    }

    public function isBigWord()
    {
        // if (strlen($inputString) > 7) {
        //     return 'Yes';
        // } else {
        //     return 'No';
        // }

        # Above if/else construct simplified using a ternary operator
        # Ref: https://hesweb.dev/e15/notes/php/code-design#ternary-operator-codecode

        return (strlen($this->inputString) > 7) ? 'Yes' : 'No';
    }
}
