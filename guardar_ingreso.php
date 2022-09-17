<?php
$monto = $_POST['monto'];
$medio_ingreso=$_POST['medio_ingreso'];
$motivo = $_POST['motivo'];

if(trim($monto)==''){
    echo '<script>alert("Hubo un ERROR!!... El monto no puede ser vacío");history.go(-1)</script>';
exit;
}

if($monto<=0){
    echo '<script>alert("Hubo un ERROR!!... El monto ingresado no puede ser menor o igual a 0");history.go(-1)</script>';
exit;
}

if($medio_ingreso[0]==-1){
    echo '<script>alert("Hubo un ERROR!!... Debe seleccionar un medio de ingreso");history.go(-1)</script>';
exit;
}

if(strlen($motivo)>60){
    echo '<script>alert("Hubo un ERROR!!... Excede el limite de carácteres(60)");history.go(-1)</script>';
exit;
}

include "conexion/conexion.php";

$sql = "INSERT INTO ingresos(monto,medio_ingreso,motivo) values($monto,$medio_ingreso[0],'$motivo')";
$res = mysqli_query($con,$sql);

if($res){
    $sql="update dinero_actual set dinero=dinero+$monto";
    $res = mysqli_query($con,$sql);
    echo '<script>alert("Se cargo el Ingreso correctamente..."); window.location="index.php"</script>';
}else{
     echo '<script>alert("Hubo un Error al intentar cargar el Ingreso"); history.go(-1)</script>';
}

mysqli_close($con);


?>