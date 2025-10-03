<html>
    <link rel="stylesheet" href="style.css">
<?php
    $peso = $_POST["peso"];
    $estatura = $_POST["estatura"];

    function calcular_imc($peso, $estatura) {
        $imc = $peso/ $estatura**2;

        if ($imc <= 18) echo "el indice de masa corporal es bajo <br>";
        elseif ($imc > 18 && $imc <= 25) echo "el indice de masa corporal es normal <br>";
        elseif ($imc >25 && $imc <= 31) echo "el indice de masa corporal indica <h4>sobrepeso</h4>";
        else echo "el indice de masa corporal indica <h4>obesidad</h4>";

        return $imc;
    }

    echo "la persona cuenta con un ".calcular_imc(peso: $peso, estatura: $estatura);
?>
</html>