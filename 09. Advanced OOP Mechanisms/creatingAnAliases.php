<?php
    // Imports the file contents:
    require_once "oneMoreNamespace.php";
    // Creates aliases:
    use function MyUtils\show;
    use function MyUtils\display as disp;
    use MyUtils\MyClass as MyClass;

    // Users aliases:
    show();
    disp();
    $obj = new MyClass();
?>