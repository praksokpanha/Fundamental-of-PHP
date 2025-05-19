<?php
    // The class with a special method:
    class MyClass{
        // The method:
        public function show($txt){
            echo $txt. "\n";
        }
        // The special method:
        public function __call($name, $arguments)
        {
            if(strlen($name) > 5){
                echo "The arguments: ",sizeof($arguments),"\n";
                echo "The $name() method does not exist!\n";
            } else {
                for ($k = 0; $k < sizeof($arguments); $k++){
                    echo "[",$k + 1,"] $arguments[$k]\n";
                }
            }
        }
    }
     // An objectect of the class:
    $object=new MyClass();
    // Calls an existing method:
    $object->show("The MyClass class");
    // Calls the non-existing methods:
    $object->display("Alpha");
    $object->hello("Bravo","Charlie","Delta");

?>