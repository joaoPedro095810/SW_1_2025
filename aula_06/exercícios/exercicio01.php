<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-01</title>
</head>
<body>
    <table>
        <?php
            $num_colunas = 4;
            $num_linhas = 8;

            for ($i = 1; $i <= $num_linhas; $i++){
                if ($i % 2 == 0){
                    $color = "#33ccff";
                }else{
                    $color = "#ff0000";
                }

                if ($i == 1){
                    echo "
                        <tr style=\"background-color:".$color."\">
                            <th>coluna 01 </th>
                            <th>coluna 02 </th>
                            <th>coluna 03 </th>
                            <th>coluna 04 </th>
                        </tr>";
                }else{
                    echo"<tr style=\"background-color:".$color."\"><td>linha ".$i." </td><td>linha ".$i." </td><td>linha ".$i." </td><td>linha ".$i." </td></tr>";
                }
            }
        ?>
    </table>

</body>
</html>