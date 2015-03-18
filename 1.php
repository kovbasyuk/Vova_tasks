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
</div>
</body>
</html>