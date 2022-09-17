<?php
$nombre = $_POST['nombre'];

if(trim($nombre)==''){
    echo '<script>alert("Hubo un ERROR!!... El nombre de la Categoría no puede ser vacío");history.go(-1)</script>';
exit;
}

if(strlen($nombre)>60){
    echo '<script>alert("Hubo un ERROR!!... Supera la cantidad de carácteres(60)"); history.go(-1)</script>';
    exit;
}

include "conexion/conexion.php";

$sql = "SELECT * FROM categorias Where descripcion='$nombre'";
$res = mysqli_query($con,$sql);
$reg = mysqli_num_rows($res);
if($reg!=0){
    echo'<script>alert("Ya existe esta Categoría"); history.go(-1);</script>';
    exit;
}

$sql = "INSERT INTO categorias(descripcion) values('$nombre')";
$res = mysqli_query($con,$sql);

if($res){
    echo '<script>alert("Se cargo la categoria correctamente..."); window.location="agregar_categoria.php"</script>';
}else{
    echo '<script>alert("Hubo un Error al intentar cargar la categoría"); history.go(-1)</script>';
}

mysqli_close($con);

?>