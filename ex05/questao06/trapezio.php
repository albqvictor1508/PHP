<?php
    function AreaTrapezio($baseMaior, $baseMenor, $altura) {
        return ($baseMaior + $baseMenor / 2) * $altura;
    }
    $baseMaior = $_POST['baseMaior'];
    $baseMenor = $_POST['baseMaior'];
    $altura = $_POST['baseMaior'];
    echo AreaTrapezio($baseMaior, $baseMenor, $altura);
?>