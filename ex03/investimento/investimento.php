<?php
    function tipoDeInvestimento() {
        $tipo = $_POST['tipo'];
        
        switch($tipo) {
            case 1:
                return "Poupança, rende 3% ao mês";
                break;
            case 2: 
                return "Fundos de renda fixa, rende 4% ao mês";
                break;
            case $tipo > 2:
                return "tipo inválido";
        }
    }

    echo tipoDeInvestimento();

    $numeros = [2, 4, 5, 1, 9, 16];
    $contador = 0;

    foreach($numeros as $numero) {
        $contador += $numero;
    }
?>