<!doctype html>
<html lang='en'>

<head>
    <title>Word Scramble</title>
    <meta charset='utf-8'>

    <style>
        #results {
            background-color: lightblue;
            padding: 10px;
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <form method='POST' action='process.php'>
        <h1>Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if ($results) { ?>
    <div id='results'>
        <?php echo $results ?>
    </div>
    <?php } ?>
</body>

</html>