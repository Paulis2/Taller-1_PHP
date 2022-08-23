<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $pesos = (int)$_GET["pesos"];
        
        if(isset($_GET["usd"])){
            echo("<h1>La cantidad ingresada de COP corresponde a :  ". round($pesos / 4414, 2)." USD</h1>"). "<br>";
        }
        elseif(isset($_GET["eur"])){
            echo("<h1>La cantidad ingresada de COP corresponde a:  ". round($pesos / 4511, 2)." EUR</h1>"). "<br>";
        }
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>s