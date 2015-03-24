<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<div>

    <?php
    $cols = 6;
    $rows = 8;
    $table = '<table border="1">';
    for ($tr=1; $tr<=$rows; $tr++){
        $table .= '<tr>';
        for ($td=1; $td<=$cols; $td++){
            if ($tr===1 or $td===1){
                $table .= '<th style="color:white;background-color:indianred;">'. $tr*$td .'</th>';
            }else{
                $table .= '<td>'. $tr*$td .'</td>';
            }
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    echo $table;
    ?>

</div>
</body>
</html>