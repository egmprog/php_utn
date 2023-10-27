<?php
//conexion a la base de datos
function conexion(){
    $conexion=mysqli_connect('localhost','root','','restaurant01')or exit("No se pudo conectar a la base de datos");
    return $conexion;
};

//verificacion de datos
function verificar_datos($filtro,$cadena){
    if(preg_match("/^".$filtro."$/",$cadena)){
        return false;
    }else{
        return true;
    }
}

//limpiar cadenas de texto y evitar inyectar sql
function limpiar_cadena($cadena){
    // $cadena=trim($cadena);
     $cadena=stripslashes($cadena);
     $cadena=str_ireplace("<script>", "", $cadena);
     $cadena=str_ireplace("</script>", "", $cadena);
     $cadena=str_ireplace("<script src", "", $cadena);
     $cadena=str_ireplace("<script type=", "", $cadena);
     $cadena=str_ireplace("SELECT * FROM", "", $cadena);
     $cadena=str_ireplace("DELETE FROM", "", $cadena);
     $cadena=str_ireplace("INSERT INTO", "", $cadena);
     $cadena=str_ireplace("DROP TABLE", "", $cadena);
     $cadena=str_ireplace("DROP DATABASE", "", $cadena);
     $cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
     $cadena=str_ireplace("SHOW TABLES;", "", $cadena);
     $cadena=str_ireplace("SHOW DATABASES;", "", $cadena);
     $cadena=str_ireplace("<?php", "", $cadena);
     $cadena=str_ireplace("?>", "", $cadena);
     $cadena=str_ireplace("--", "", $cadena);
     $cadena=str_ireplace("^", "", $cadena);
     $cadena=str_ireplace("<", "", $cadena);
     $cadena=str_ireplace("[", "", $cadena);
     $cadena=str_ireplace("]", "", $cadena);
     $cadena=str_ireplace("==", "", $cadena);
     $cadena=str_ireplace(";", "", $cadena);
     $cadena=str_ireplace("::", "", $cadena);
     $cadena=trim($cadena);
     $cadena=stripslashes($cadena);
     return $cadena;
 }
