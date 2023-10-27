<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad obligatoria Módulo 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <!-- -->
    <!-- -->
    <!-- -->
    <h4 class="tA">Actividad obligatoria del Módulo 1<br></h4>
    <h1 class="tA">Cálculo del volumen de un cilindro<br></h1>
    <div>
        <img src="cilindro01.png">
    </div>
    <div class="tB">
        <form action="" method="POST">
            <label for="r">Radio del cilindro r (en cm)</label><br>
            <input type="text" id="r" name="r"><br>
            <label for="h">Altura del cilindro (h en cm)</label><br>
            <input type="text" id="h" name="h"><br>
            <input type="submit" value="Calcular"><br>
        </form>
    </div>
    <div class="tB">
    <?php
        $volumen=0;
        if (isset($_POST['r'])) {
            $radio = floatval($_POST['r']);         
        }
        if (isset($_POST['h'])) {
            $altura = floatval($_POST['h']);
        }
        
        define("PI", 3.14159265359);
        define("RESULTADO", "El volumen del cilindro es: ");
        
        
        if((isset($_POST['r'])&&(isset($_POST['h'])))){ 
            $volumen =floatval(PI * $radio * $radio * $altura);
            echo '<br>';
            echo 'Cuando el radio es '.$radio.' cm'.'<br>';
            echo 'y la altura es '.$altura.' cm'.'<br>';
            echo RESULTADO.number_format($volumen,2)." cm2";
        }else{
            echo "<h3>Es necesario colocar dos valores numéricos</h3>";
        }
    ?>      
    </div>  
    
    
    
</body>
</html>