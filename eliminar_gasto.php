<?php
$cod = $_GET['cod'];


include("conexion/conexion.php");


$sql = "DELETE FROM gastos where cod_gasto=$cod";

$resultado=mysqli_query($con,$sql);


if($resultado){
    echo'<script>window.location="index.php";</script>';
}else{
    echo'<script>alert("ERROR al intentar Eliminar el gasto."); history.go(-1);</script>';
}

mysqli_close($con);

?>