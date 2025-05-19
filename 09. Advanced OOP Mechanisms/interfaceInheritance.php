<?php
    // The interface:
    interface Alpha{
        function show();
    }

    // The Bravo interface inherits the Aplha interface:
    interface Bravo extends Alpha{
        function set($val);
    }
    // The class implements the Bravo interface:
    class MyClass implements Bravo{
        public $num;
        function set($val){
            $this->num=$val;
        }
        function show(){
            echo "\$num = ",$this->num,"\n";
        }
    }
    // Create an object:
    $obj = new MyClass;
    // Checks the result:
    $obj->set(123);
    $obj->show();
?>