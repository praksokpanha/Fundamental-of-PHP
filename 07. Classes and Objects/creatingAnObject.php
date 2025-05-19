<?php
    // Description of a class:
    class MyClass{
        public $number;
    }
    // Creates an object:
    $object = new MyClass;
    // The field is assigned a value:
    $object->number = 123;
    // Displays the field:
    echo "The field \$number: $object->number\n";
    // The new value of the field:
    $object->number = 321;
    // Displays the field:
    echo "The field \$number: $object->number\n";
?>