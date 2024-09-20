<?php
    $nome = $_POST['nome'];
    $salario = $_POST['salario'];

    echo "Funcionario: " . $nome . ',' . "salario final: " . $salario * 0.04;
?>