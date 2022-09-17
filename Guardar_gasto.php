<?php
$monto = $_POST['monto'];
$categoria = $_POST['categoria'];
$medio_pago = $_POST['medio_pago'];
$motivo = $_POST['motivo'];

if($monto<=0){
    echo '<script>alert("Hubo un ERROR!!... El monto no puede ser un número negativo");history.go(-1)</script>';
exit;
}

if(trim($monto)==''){
    echo '<script>alert("Hubo un ERROR!!... El monto no puede ser vacío");history.go(-1)</script>';
exit;
}

if($categoria[0]==-1){
    echo '<script>alert("Hubo un ERROR!!... Debe Seleccionar una Categoría");history.go(-1)</script>';
exit;
}

if($medio_pago[0]==-1){
    echo '<script>alert("Hubo un ERROR!!... Debe Seleccionar un medio de pago");history.go(-1)</script>';
exit;
}

if(strlen($motivo)>100){
    echo '<script>alert("Hubo un ERROR!!... Supera la cantidad de carácteres(100)"); history.go(-1)</script>';
exit;
}

if(trim($motivo)==''){
    echo '<script>alert("Hubo un ERROR!!... El motivo no puede ser vacío. Proporcione un texto"); history.go(-1)</script>';
    exit;
}

include "conexion/conexion.php";

$sql="INSERT INTO gastos(monto, id_categoria, medio_pago,motivo) VALUES($monto,$categoria[0],$medio_pago[0],'$motivo')";

$res = mysqli_query($con,$sql);

if($res){
    $sql="update dinero_actual set dinero=dinero-$monto";
    $res = mysqli_query($con,$sql);
    echo '<script>alert("Se cargo el gasto correctamente..."); window.location="index.php"</script>';
}else{
    echo '<script>alert("Hubo un Error al intentar cargar el gasto"); history.go(-1)</script>';
}

mysqli_close($con);

?>