<?php
    function recebeDados() {
    $cor = $_REQUEST['cor'];

    if(!$cor) {
        echo '<p>coloca uma cor de verdade!<p>';
        return;
    }

    if($cor === 'roxo') {
        echo 'MUITO BOM GOSTO!!!!';
        return;
    }

    echo 'A sua cor favorita:' .$cor;
    }    

    recebeDados();
?>
