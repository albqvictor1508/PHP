<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>P AGA P</title>
</head>
<body>
    <main>
        <form action="index.php" method="post">
            Nome: <input type="text" name="nome"/>
            Sobrenome: <input type="text" name="sobrenome"/>
            Idade: <input type="idade" name="idade"/>
        </form>
        <?php
        echo ValidaForm();
        ?>
    </main>

    <script src="index.php"></script>
</body>
</html>

<?php

function recebeDados($dados) {
    $nome = isset($dados['nome']) ? htmlspecialchars($dados['nome']): null;
    $sobrenome = isset($dados['sobrenome']) ? htmlspecialchars($dados['sobrenome']): null;

    if(is_string($nome) && is_string($sobrenome)) ValidaForm($nome, $sobrenome);    
}

function ValidaForm($nome, $sobrenome) {

    if(!$nome || !$sobrenome) {
        echo "<p>Nome e Sobrenome são obrigatórios.</p>";
        return $erros;
    }



    return ` 
    <p>
        Nome: $nome
        Sobrenome: $sobrenome
    </p>
    `;
}
?>