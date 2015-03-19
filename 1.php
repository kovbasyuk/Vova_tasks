<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<div>

    <?php
    $day=10;
    switch($day){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Це робочий день";
            break;
        case 6:
        case 7:
            echo "Це вихідний день";
            break;
        default:
            echo "Не відомий день";
    }
    ?>

</div>
</body>
</html>