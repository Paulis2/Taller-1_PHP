<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $radio = (int)$_GET["radio"];
        echo("<h1>El Area es: ". round(pi()*pow($radio,2),1) ."cm²</h1>"."<br>");

        echo("<h1>El Perimetro es: ". round(2*pi()*$radio, 1) ."cm</h1>"."<br>");
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>