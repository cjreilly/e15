<!doctype html>
<html lang='en'>

<head>
    <title>e15 Project 1 - String Processor</title>
    <meta charset='utf-8'>
</head>

<body>
    <h1>e15 Project 1 - String Processor</h1>

    <form method='POST' action='process.php'>
        <label for='inputString'>Enter a string:</label>
        <input type='text' id='inputString' name='inputString'>
        <button type='submit'>Process</button>
    </form>

    <?php if (isset($results)) : ?>
    <h2>Is big word?</h2>
    <?= $isBigWord ?>

    <h2>Is palindrome?</h2>
    <?=$isPalindrome ?>
    <?php endif ?>

</body>

</html>