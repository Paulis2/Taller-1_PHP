<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php   
        $nota1 = (int)$_GET["nota1"];
        $nota2 = (int)$_GET["nota2"];
        $nota3 = (int)$_GET["nota3"];
        $nota4 = (int)$_GET["nota4"];
        $nota5 = (int)$_GET["nota5"];
        
        $media = (30/100*$nota1 + 30/100*$nota2 + 10/100*$nota3 + 10/100*$nota4 + 20/100*$nota5);
        echo ("<h1>El promedio de la nota es: ". $media. "</h1>");
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>