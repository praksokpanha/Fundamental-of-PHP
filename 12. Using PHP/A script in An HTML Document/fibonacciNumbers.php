<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fibonacci Numbers</title>
</head>
<body>
    <h1>The Fibonacci Sequence</h1>
    <p>The first two numbers are equal to one, and each next number
        is equal to the sum of the two previous ones. Here are the number:
    </p>
    <p>
        <?php
        $n = 20;
        $a = 1;
        $b = 1;
        echo "$a, $b";
        for($k=3;$k<=$n;$k++){
            $b = $a + $b;
            $a = $b - $a;
            echo ", $b";
        }
        echo ", and so on."
    ?>
    </p>
    <p>Do you know what the next number is?</p>
</body>
</html>