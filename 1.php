<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<div>

    <?php
    $bmw = array("model" => "X5", "speed" => "120", "doors" => "5", "year" => "2006");
    $toyota = array("model" => "Carina", "speed" => "130", "doors" => "4", "year" => "2007");
    $opel = array("model" => "Corsa", "speed" => "140", "doors" => "5", "year" => "2007");
    echo " Модель-". $bmw ["model"].", Швидкість-".$bmw ["speed"].", Дверок-".$bmw ["doors"].", Рік-".$bmw ["year"]."<br>";
    echo " Модель-". $toyota ["model"].", Швидкість-".$toyota ["speed"].", Дверок-".$toyota ["doors"].", Рік-".$toyota ["year"]."<br>";
    echo " Модель-". $opel ["model"].", Швидкість-".$opel ["speed"].", Дверок-".$opel ["doors"].", Рік-".$opel ["year"]."<br>";
    ?>

</div>
</body>
</html>