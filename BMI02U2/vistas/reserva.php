
    <div class="cont1">
    <p class="p1">Por favor, complete la solicitud de su reserva aquí:</p>
    </div>
    <div class="cont1">
    <form action="./php/reservar.php" method="post" class="p1">
    <input type="text" name="apellidos" placeholder="Apellidos"><br>    
    <input type="text" name="nombres" placeholder="Nombres"><br>    
    <input type="text" name="email" placeholder="Correo electrónico"><br>    
    <input type="text" name="telefono" placeholder="Teléfono de contacto"><br>    
    <input type="int" name="cantidad_p" placeholder="Cantidad de personas"><br>    
    <input type="date" name="fecha" placeholder="Fecha de la reserva">
    <label for="fecha">Seleccione la fecha de la reserva</label><br>               
    <input list="hora" name="hora" placeholder="Hora de la reserva"><br><br>
                    <datalist id="hora">
                        <option value="12:00">
                        <option value="13:30">
                        <option value="20:00">
                        <option value="21:30">
                        <option value="23:00">
                    </datalist>   
    
    <input type="submit" value="Realizar la reserva">
             
    </form>
    </div>

