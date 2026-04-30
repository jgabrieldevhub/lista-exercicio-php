<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Lista de Exercícios php</title>
</head>
<body>
<div class="container">
    <div class="item">
        <?php
        echo 'iniciando estudos em php';
        ?>
    </div>

    <div class="item">
        <?php
            $escola = 'Senac Americana';

            echo $escola;
        ?>
    </div>

    <div class="item">
        <?php
            $escola = 'Senac Americana';

            //adicionando uma variavel;

            echo $escola;

            /* 
                comando echo em conjunto com a variavel para imprimir a a variavel na tela;
            */
        ?>
    </div>

    <div class="item">
        <?php
            echo '<pre>';    

            $numeros = [10, 20, 30];

            print_r($numeros);
        ?>
    </div>

</div>

</body>
</html>