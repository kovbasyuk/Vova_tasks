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
    if($age >=18 && $age <=59){
        echo "Вам ще працювати і працювати";
    }
    elseif($age > 59){
        echo "Вам пора на пенсію";
    }
    else{
        if($age >=1 && $age<18){
            echo "Вам ще зарано працювати";
        }else{echo "Не відомий вік";}}


    ?>

</div>
</body>
</html>