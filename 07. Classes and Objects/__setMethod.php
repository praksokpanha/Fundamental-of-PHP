<?php
    // The class description:
    class MyClass{
        // The public field:
        public $number;
        // The private field:
        private $code;
        // The method to access the private field:
        public function get(){
            return $this->code;
        }
        // The method to assign a value
        // to the private field:
        public function set($code){
            $this->code = $code;
        }
        // The special method is called when
        // assigning a value to the inaccessible filed:
        public function __set($name, $arguments){
            if(isset($this->$name)) $this->$name = $arguments/2;
            else $this->$name = 2*$arguments;
        }
    }
    // Creates an object:
    $object=new MyClass();
    // Assigns values to the fields:
    $object->number=123;
    $object->set(321);
    // Checks the values of the fields:
    echo "\$number: ",$object->number,"\n";
    echo "\$code: ",$object->get(),"\n";
    // Assigns a value to the private field:
    $object->code=100;
    // Assigns a value to the non-existing field:
    $object->value=100;
    // Checks the values of the fields:
    echo "\$code: ",$object->get(),"\n";
    echo "\$value: ",$object->value,"\n";
?>