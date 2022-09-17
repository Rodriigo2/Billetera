<?php
$cod = $_GET['cod'];


include("conexion/conexion.php");


$sql = "DELETE FROM cuentas where id_cuentas=$cod";

$resultado=mysqli_query($con,$sql);


if($resultado){
    echo'<script>window.location="index.php";</script>';
}else{
    echo'<script>alert("ERROR al intentar Eliminar la cuenta."); history.go(-1);</script>';
}

mysqli_close($con);

?>