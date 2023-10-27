<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./inc/head.php" ?>
</head>
<body>
    <?php include "./inc/nav.php" ?>
    <div class="cont1">
    <p class="p1">Por favor, complete la solicitud de su reserva aquí:</p>
    </div>
    <form action="reservar.php" method="post" class="p1">
        
        <br>
        <table class="cont4">
            <tr>
                <td><label for="apellido">Apellido</label></td>
                <td><input type="text" name="apellido"></td>                
            </tr>
            <tr>
                <td><label for="nombres">Nombres</label></td>
                <td><input type="text" name="nombres"><br></td>                
            </tr>
            <tr>
                <td><label for="email">Correo electrónico</label></td>
                <td><input type="text" name="email"><br></td>                
            </tr>
            <tr>
                <td><label for="telefono">Teléfono móvil</label></td>
                <td><input type="text" name="telefono"><br></td>
            </tr>
            <tr>
                <td><label for="cantidad_p">Cantidad de personas</label></td>
                <td><input type="int" name="cantidad_p"><br></td>                
            </tr>
            <tr>
                <td><label for="fecha">Fecha</label></td>
                <td><input type="date" name="fecha"><br></td>                
            </tr>
            <tr>
                <td><label for="hora">Hora</label></td>
                <td>
                <input list="hora" name="hora"><br><br>
                    <datalist id="hora">
                        <option value="12:00">
                        <option value="13:30">
                        <option value="20:00">
                        <option value="21:30">
                        <option value="23:00">
                    </datalist>
                </td>                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Realizar la reserva"></td>                
            </tr>
            <tr>
                <td></td>
                <td></td>                
            </tr>
        </table>
             
    </form>

    <?php include "./inc/footer.php" ?>

</body>
</html>
