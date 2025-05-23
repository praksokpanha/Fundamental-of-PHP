<?php
    // The parent class:
    class Alpha{
        // The field:
        public $number;
        // The method for assigning a value to the field:
        public function set(...$arguments){
            $this->number = $arguments[0];
        }
        // The method for displaying the field:
        public function show(){
            echo "The class Alpla\n";
            echo "The field \$number: ",$this->number,"\n";
        }
    }
    // The child class:
    class Bravo extends Alpha{
        // The field:
        public $symbol;
        // Overrides the method for assigning 
        // Values to the fields:
        public function set(...$arguments){
            parent::set($arguments[0]);
            $this->symbol = $arguments[1];
        }
        // Overrides the method for displaying 
        // the fields:
        public function show(){
            echo "-------------------\n";
            parent::show();
            echo "The class Bravo\n";
            echo "The field \$symbol: ",$this->symbol,"\n";
        }
    }
    // An object of the parent class:
    $A=new Alpha;
    // Assigning a value to the field:
    $A->set(100);
    // Displays the field:
    $A->show();
    // An object of the child class:
    $B=new Bravo;
    // Assigns values to the fields:
    $B->set(200,'B');
    // Displays the fields:
    $B->show();
?>
