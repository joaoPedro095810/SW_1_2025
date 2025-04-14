<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício-03</title>
</head>
<body>

    <style>
        h1,h2 {
            text-align: center;
        }
        
        table, tr, td, th {
            margin: auto;
            border: 2px solid black;
            text-align: center;
        }
    </style>

    <?php

        $produtos = [
            [
                "nome"=>"mouse",
                "preco"=>"100",
                "categoria"=>"periférico"
            ],
            [
                "nome"=>"bola",
                "preco"=>"19.99",
                "categoria"=>"brinquedo"
            ],
            [
                "nome"=>"boné",
                "preco"=>"50",
                "categoria"=>"roupa"
            ]
        ]
    ?>


    <?php
        $cor = [
            "periférico" => "#ff9999",
            "brinquedo" => "#97ffcc",
            "roupa" => "#33ccff"
        ];
    ?>

    <h2>Produtos</h2>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço (R$)</th>
            <th>Categoria</th>
        </tr>
    <?php 
        foreach ($produtos as $produto) {
            echo "<tr style='background-color: " . $cor[$produto['categoria']] . ";'>";
            echo "<td>" . $produto['nome'] . "</td>";
            echo "<td>" . number_format($produto['preco'], 2, ',') . "</td>";
            echo "<td>" . $produto['categoria'] . "</td>";
            echo "</tr>";
        }
    ?>
</body>
</body>
</html>
