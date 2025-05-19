<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>
<body>
    <h1>Welcome Page</h1>
    <p>We are happy to greet you, <strong>
        <?php
            if(isset($_GET["name"])) $name = $_GET["name"];
            else $name = "Mister X";
            echo $name;
        ?>
    </strong>!
    It is a great honor for us.
    </p>
</body>
</html>