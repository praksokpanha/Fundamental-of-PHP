<?php
    // The interface:
    interface MyInterface{
        function show();
    }
    // The class that implements MyInterface:
    class Alpha implements MyInterface{
        function show(){
            echo "The class Alpha\n";
        }
    }
    // The class does not implement the interface:
    class Bravo{
        function show(){
            echo "The class Bravo\n";
        }
    }
    // The argument type is checked in the function body:
    function display($obj){
        if($obj instanceof MyInterface){
            $obj->show();
        } else {
            echo "The argument type error\n";
        }
    }
    // Create objects:
    $A = new Alpha();
    $B = new Bravo();
    // The object is passed as an argument to the function:
    display($A);
    display($B);
?>