<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];
        
        if(isset($_GET["kelvin"])){
            echo("<h1>La cantidad ingresada de grados C equivalen a:  ". ($primer + 273.15)."°K</h1>"). "<br>";
        }
        elseif(isset($_GET["fahrenheit"])){
            echo("<h1>La cantidad ingresada de grados C equivalen a:  ". ($primer * 9/5 + 32)."°F</h1>"). "<br>";
        }
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>