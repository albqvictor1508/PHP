<?php 
    $salario = $_POST['salario'];

    function calcularImposto($salario) {
        $porcentagem = 0;
        $impostos= 0;

        if(!is_numeric($salario)) {
            return;
        }
    
        if($salario <= 12000) {
            $porcentagem = $salario - ($salario * (5/100));
            $impostos = 0;
    
            return 'até 12000: ' . $porcentagem . " " . $impostos;
        }
    
        if($salario > 12000 || $salario < 25000) {
            $porcentagem = $salario - ($salario * (5/100));
            $impostos = $salario - ($salario * (15/100));

            return 'maior que 12000, menor que 25000: ' . 'Valor Líquido: ' . $porcentagem . " " . $impostos;
        }
    
        if($salario >= 25000) {
            $porcentagem = $salario - ($salario * (15/100));
            $impostos = $salario - ($salario * (20/100));

            return 'maior que 25000' . $porcentagem . " " . $impostos;
        }
    
    }

    echo calcularImposto($salario);
?>