<?php
/**/
$usuario="root";
$clave="cucha+123";



try{
    $conexion = new PDO('mysql:host=localhost;dbname=livestock', $usuario, $clave);
    echo"<script>alert('conexion exitosa')</script>";
}

catch(PDOException $error){

echo" error en la conexion $error";



}





?>

