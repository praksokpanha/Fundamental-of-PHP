<?php
    // Includes the file contents into the program:
    require_once "creatingNamespace.php";
    // The function desription:
    function hello(){
        echo "The function hello()\n";
    }
    // Creates an object from the imported namespace:
    $obj = new MyUtils\MyClass();
    // Calls a method from the object:
    $obj->show();
    // Calls the function desribed in the program:
    hello();
    // Calls the function from the imported namespaces:
    MyUtils\hello();

?>