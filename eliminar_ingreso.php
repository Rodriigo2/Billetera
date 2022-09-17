<?php
$cod = $_GET['cod'];


include("conexion/conexion.php");


$sql = "DELETE FROM ingresos where id_ingreso=$cod";

$resultado=mysqli_query($con,$sql);


if($resultado){
    echo'<script>window.location="index.php";</script>';
}else{
    echo'<script>alert("ERROR al intentar Eliminar el ingreso."); history.go(-1);</script>';
}

mysqli_close($con);

?>