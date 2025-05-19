<?php
    // The class:
    class MyClass{
        // The public field:
        public $number = 321;
        // The private fields:
        private $code = 100;
        // The method to access the private field:
        public function get(){
            return $this->code;
        }
        // The method handles the access
        // to the non-exiting field:
        public function __get($name){
            if(isset($this->$name)) return $this->$name/2;
            return 123;
        }
    }
    // Creates objects:
    $object = new MyClass();
    // The reference to the public field:
    echo "\$number: ",$object->number,"\n";
    // The reference to the private field:
    echo "\$code: ",$object->code,"\n";
    echo "get(): ",$object->get(),"\n";
    // The reference to the non-existing field:
    echo "\$value: ",$object->value,"\n";
?>