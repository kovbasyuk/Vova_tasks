<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<div>

    <?php
    $name = "Ігор";
    $age = 24;
    unset($age);

    echo "Моє ім'я". $name. "<br>Мені". $age. " років.";
    ?>
    <?php
    define("Ігор",23,true);
    echo Ігор;
    if (defined("Ігор")==true) echo "Константа Ігор объявлена!";
    ?>

</div>
</body>
</html>