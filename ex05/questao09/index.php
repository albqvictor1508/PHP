<?php
    function AreaQuadrado($lado) {
        return Math.pow($lado);
    }
    
    function AreaTriangulo($base, $altura) {
        return ($base * $altura) / 2;
    }
    
    function AreaParalelogramoERetangulo($base, $altura) {
        return $base * $altura;
    }

    function AreaLosangulo($DiagonalMaior, $diagonalMenor) {
        return ($DiagonalMaior * $diagonalMenor) / 2;
    }

    function AreaCirculo($raio) {
        return 3.14 * (Math.pow(raio));
    }
?>