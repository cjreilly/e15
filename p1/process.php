<?php

require 'StringProcessor.php';

session_start();

# Extract data from the form submission
$inputString = $_POST['inputString'];

# Instantiate a new object of our StringProcessor class
$stringProcessor = new StringProcessor($inputString);

# Store all our results in one array in the session
$_SESSION['results'] = [
    'isBigWord' => $stringProcessor->isBigWord(),
    'isPalindrome' => $stringProcessor->isPalindrome()
];

# Alternatively, we could store individual values in the session,
# but this is more verbose than the above solution
//$_SESSION['isBigWordResult'] = $isBigWordResult;
//$_SESSION['isPalindrome'] = $isPalindrome;

# Redirect back to the index page
header('Location: index.php');
