<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <style>
        .fome {
            color: purple;
            font-size: 1.4rem;
            font-family: Arial;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <main>
        <?php
            $frase = ['eu', 'to', 'com', 'fome', 'demais'];

            for($i = 0; $i < count($frase); ++$i) {
                echo '<p class="fome">'. $frase[$i] . "</p>";
            }
            
            //chave = indice ; valor = valor dentro do array; frase = array completo
            foreach($frase as $chave => $valor) { 
                echo $valor . " " . $chave;
            }

            #for e foreach, as condicionais são iguais as do JS
        ?>
    </main>
</body>
</html>