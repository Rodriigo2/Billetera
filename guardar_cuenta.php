<?php
$nombre = $_POST['nombre'];
$monto = $_POST['monto'];
$fecha_vencimiento = $_POST['fecha_vencimiento'];


if(trim($nombre)==''){
    echo '<script>alert("Hubo un ERROR. El campo Nombre de cuenta no puede ser vacio. Por favor ingrese un Nombre!"); history.go(-1)</script>';
    exit;
}

if(strlen($nombre)>60){
    echo '<script>alert("Hubo un ERROR. El Nombre de cuenta Excede los carácteres(60).");history.go(-1)</script>';
    exit;
}

if(trim($monto)==''){
    echo '<script>alert("Hubo un ERROR. El campo Monto no puede ser vacio. Por favor ingrese un Monto!"); history.go(-1)</script>';
    exit;
}

if($monto<=0){
    echo '<script>alert("Hubo un ERROR. El valor de Monto no puede ser Negativo o igual a cero!"); history.go(-1)</script>';
    exit;
}

if(trim($fecha_vencimiento)==''){
    echo '<script>alert("Hubo un ERROR. El campo fecha de vencimiento no puede ser vacio. Por favor ingrese una fecha de vencimiento!"); history.go(-1)</script>';
    exit;
}

if(strlen($fecha_vencimiento)<10){
    echo '<script>alert("Hubo un ERROR. Debe ingresar una fecha de vencimiento válida (dd/mm/aaaa)!"); history.go(-1)</script>';
    exit;
}

if(strlen($fecha_vencimiento)>10){
    echo '<script>alert("Hubo un ERROR. Debe ingresar una fecha de vencimiento válida (dd/mm/aaaa)!"); history.go(-1)</script>';
    exit;
}

if($fecha_vencimiento<0){
    echo '<script>alert("Hubo un ERROR. La fecha de vencimiento no puede contener numeros negativos!"); history.go(-1)</script>';
    exit;
}

include ("conexion/conexion.php");

$sql = "INSERT INTO cuentas(nombre_cuenta,monto,fecha_vencimiento) values('$nombre',$monto,'$fecha_vencimiento')";

$res = mysqli_query($con,$sql);

if($res){
    echo '<script>alert("Los datos de la cuenta se guardaron correctamente"); window.location="index.php"</script>';
}else{
    echo '<script>alert("Hubo un Error. No se puedieron guardar los datos de la cuenta."); history.go(-1)</script>';
}
?>