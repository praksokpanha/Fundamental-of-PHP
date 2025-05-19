<?php
    print("Enter a number: ");
    # Reads a value and converts it
    # to the integer format:
    $number = (int)trim(fgets(STDIN));
    # The ternary operation is used:
    $word = ($number%2==0)?"even":"odd";
    # The result of the test for even/odd:
    print("$number is an $word number");
?>