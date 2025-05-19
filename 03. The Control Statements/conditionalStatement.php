<?php
    print("Enter an integer number: ");
    # Read a number:
    $number = (integer)trim(fgets(STDIN));
    # The divider:
    $A = 3;
    # Checks wheter the numbers can be divided:
    if($number%$A==0){
        print("The number $number can be divided by $A");
    }
    else {
        print("The number $number can not be divided by $A");
    }
?>