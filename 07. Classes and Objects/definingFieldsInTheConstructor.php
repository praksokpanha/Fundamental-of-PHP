<?php
    // The declaration of a class:
    class MyClass{
        // The fields are declared in the constructor:
        function __construct(public $code, private $name){
            echo "The object is created: $code and $name\n";
        }
        // The method for displaying the fields:
            function show(){
                echo "The field \$code = ", $this->code, "\n";
                echo "The field \Sname = ", $this->name, "\n";
            }
    }
    // Creates an object:
    $object = new MyClass(123, "MyClass");
    // Checks the fields:
    $object->show();

?>