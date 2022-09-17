<?php
$cod = $_GET['cod'];
$monto = $_GET['monto'];


include "conexion/conexion.php";

$sql = "SELECT * FROM dinero_actual";
$res = mysqli_query($con,$sql);

$dato = mysqli_num_rows($res);

if($dato<$monto){
    echo '<script>alert("Imposible pagar la cuenta porque el saldo disponible es menor al monto de la cuenta");history.go(-1)</script>';
    exit;
}else{
    $sql = "UPDATE dinero_actual SET dinero=dinero-$monto";
    $res = mysqli_query($con,$sql);

    $sql = "DELETE FROM cuentas where id_cuentas=$cod";
    $res = mysqli_query($con,$sql);
    echo '<script>alert("Cuenta Pagada con éxito");window.location="index.php"</script>';
}

mysqli_close($con);
?>