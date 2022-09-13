<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stringhe colorate</title>
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>

    <?php

        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            if ($name == "Boolean") {
                echo "<h1 class='verde'>" . $name . "</h1>";
            } else {
                echo "<h1 class='blu'>" . $name . "</h1>";
            }
        }

    ?>


</body>
</html>




