<?php 
include("./inc/main.php");
include("./inc/navadmin.php");
?>
<div class="cont1">
    <p>Indicar la cantidad de mesas disponibles en el local y la cantidad de sillas de cada una de ellas:</p>
</div>
<div class="cont1">
    <form action="./php/mesas_ofert.php" method="post">
        <label for=""></label>Nombre (o número) de la mesa<br>
        <input type="text" name="mesa_nombre" placeholder="Asignar un nombre o número"><br>

        <label for=""></label>Descripción de la mesa (que verá el usuario)<br>
        <input type="text" name="mesa_descrip" placeholder="Asignar un breve texto"><br>

        <label for=""></label>Día de la semana que la mesa está disponible:<br>
        <input type="checkbox" id="lunes" name="lunes" value="Monday">
        <label for="lunes">Lunes</label><br>

        <input type="checkbox" id="martes" name="martes" value="Tuesday">
        <label for="martes">Martes</label><br>
        
        <input type="checkbox" id="lunes" name="miercoles" value="Wednesday">
        <label for="miercoles">Miércoles</label><br>

        <input type="checkbox" id="jueves" name="jueves" value="Thursday">
        <label for="jueves">Jueves</label><br>

        <input type="checkbox" id="viernes" name="viernes" value="Friday">
        <label for="viernes">Viernes</label><br>

        <input type="checkbox" id="sabado" name="sabado" value="Saturday">
        <label for="sabado">Sábado</label><br>

        <input type="checkbox" id="domingo" name="domingo" value="Sunday">
        <label for="domingo">Domingo</label><br><br>

        <label for="">Cantidad de sillas disponibles en esta mesa</label><br>
        <input type="int" name="cant_sillas" placeholder="Cantidad de sillas disponibles"><br>

        <label for="">Duración del turno</label><br>
        <input type="int" name="duracion_turno" placeholder="Cantidad de minutos"><br>

        <label for="">Hora de inicio</label><br>
        <input type="time" name="mesa_h_inicio"><br>

        <label for="">Hora de finalización</label><br>
        <input type="time" name="mesa_h_fin"><br><br>

        <button name="submit">Cargar</button>

    </form>
</div>
