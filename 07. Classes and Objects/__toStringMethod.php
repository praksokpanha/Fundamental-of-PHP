<?php
    // The description of the class
    // with the __toString() method:
    class MyClass{
        // The fields:
        public $name;
        public $code;
        // The constructor:
        function __construct($name, $code)
        {
            $this->name = $name;
            $this->code = $code;
        }
        // The __toString() Method:
        public function __toString(){
            $txt = "The fields of the object:\n";
            $txt.= "The field \$name = $this->name\n";
            $txt.= "The field \$code = $this->code\n";
            return $txt;
        }
    }
    // Creates an object of the class:
    $object = new MyClass("Object", 123);
    // Explicitly calls the method __toString():
    echo "Call the method __toString() explicitly:\n";
    echo $object->__toString();
    // Implicitly calls the method __toString():
    echo "Call the method __toString() implicitly:\n";
    echo $object;
    $text=$object."The program is over";
    print($text);
?>
    