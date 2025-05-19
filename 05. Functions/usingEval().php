<?php
    // The string variables:
    $first = '$A = 2*3+4;';
    $second = "\$B = 2*\$A-5;";
    // Call eval():
    eval($first);
    eval($second);
    echo 'The statement for $x: ';
    // Calls eval():
    eval(trim(fgets(STDIN)));
    // Check the result:
    echo "\$x = $x\n";
?>