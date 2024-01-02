<?php 
//include("./inc/textos.php"); 

?>

<div>
    <img src="./img/fachada02.jpg" alt="fachada" width="100%">
</div>
<div>
    <h2 class="titulo">Bienvenidos a la <?php echo $nombre_principal?></h2>
</div>
<nav class="nav1">    
    <div>
<<<<<<< HEAD
        <p><a href="index.php?vista=home">Inicio</a> | <a href="index.php?vista=menu">Menú del día</a> | <a href="index.php?vista=reserva">Reserve una mesa</a> | <a href="index.php?vista=login">Login administración</a></p>
=======
        <p><a href="index.php?vista=home">Inicio</a> | <a href="index.php?vista=menu">Menú del día</a> | <a href="index.php?vista=reserva">Reserve una mesa</a> | 
                
        <?php
        if(isset($_SESSION['usuario'])){
            echo '<a href="index.php?vista=login">Administración</a></p>';    
        }else{
            echo'<a href="index.php?vista=login">Login administración</a></p>';
        }
        ?>
        
>>>>>>> d0009cda515eabe22f90f1ff917394b39a79285a
    </div>
</nav>