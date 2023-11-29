<div class="cont1">
    <br>
    <form action="./php/comentario_recibido.php" method="post">
        <label for="valoracion">Valoración de este restaurant</label><br>
        <select  name="estrellas"><br>
            <datalist><br>
                <option name="5">*****</option>
                <option name="4">****</option>
                <option name="3">***</option>
                <option name="2">**</option>
                <option name="1">*</option>
            </datalist><br>
        </select><br>
        <label for="comentario">Describa un comentario</label><br>
        <textarea name="comentario" id="" cols="30" rows="5"></textarea><br>
        <input type="submit" vaule="Enviar">

    </form>
</div>