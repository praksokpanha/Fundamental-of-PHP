<?php
    // The parent class:
    class Alpha{
        // The constructor:
        function __construct()
        {
            echo "An object of the class Alpha is created\n";    
        }
        // The destructor:
        function __destruct()
        {
            echo "An object of the class Alpha is deleted\n";
        }
    }
    class Bravo extends Alpha{}
    // Creates an object of the child class:
    $object=new Bravo;
?>