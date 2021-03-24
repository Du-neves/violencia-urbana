<?php
    $ano = array("2011", "2012", "2013", "2014", "2015", "2016");

    foreach($ano as $ano) {
        echo "<a href=\"dados-violencia.php?seleciona=$ano\">$ano</a> ";
    }


    $cidade = null;
?>


<form method="post" action="dados-violencia.php">
    <p><textarea name="cidade" rows="6" cols="80"><?=$cidade?></textarea></p>
    <p><button type="submit">Envia</button></p>
</form>