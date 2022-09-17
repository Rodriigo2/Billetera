<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Billetera Virtual Personal</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div>
        <div>
            <header>
                <h1>Sistema Billetera Virtual Personal</h1>
            </header>
        </div>
        <div>
            <nav>

            </nav>
        </div>
        <div>
            <main>
                <div>
                    <h3>Dinero Disponible</h3>
                    <form action="index.php" method="POST">
                    <?php
                    include "conexion/conexion.php";
                    $sql = "SELECT * FROM dinero_actual";
                    $res = mysqli_query($con,$sql);
                    $reg= mysqli_fetch_array($res);
                    echo'<p>$ '.$reg['dinero'].'</p>';
                    echo '<input type="submit" id="submit" name="submit" value="Restaurar Dinero"></input>';
                    if(isset($_POST['submit'])){
                        $sql = "UPDATE dinero_actual set dinero=0";
                        $res = mysqli_query($con,$sql);
                        header("Location: index.php");
                    }
                    ?>
                </form>
                </div>
                <div>
                    <h3>Actividad</h3>
                    <?php
                    $sql = "SELECT gastos.*,categorias.descripcion,medios_pago.desc_pago FROM gastos inner join categorias on gastos.id_categoria=categorias.id_categoria inner join medios_pago on gastos.medio_pago=medios_pago.id_medio";
                    $res = mysqli_query($con,$sql);
                    if(empty($res)){
                    }else{
                        $filas=mysqli_num_rows($res);
                        if($filas>0){
                            while($reg=mysqli_fetch_array($res)){
                    echo 'Gasto de $'.$reg['monto'].' con '.$reg['desc_pago'].' en '.$reg['descripcion'].' -  Fecha '.$reg['fecha'].'';
                    echo ' - ';
                    echo '<a href="eliminar_gasto.php?cod='.$reg['cod_gasto'].'"><img height="15px" width="15px" src="img/delete.svg" alt="Eliminar"></a>';
                    echo '<br>';
                    echo '<br>';
                            }
                        }
                    }
                    $sql = "SELECT ingresos.*,medios_pago.desc_pago FROM ingresos inner join medios_pago on ingresos.medio_ingreso=medios_pago.id_medio ";
                    $res = mysqli_query($con,$sql);
                    if(empty($res)){

                    }else{
                        $filas=mysqli_num_rows($res);
                        if($filas>0){
                            while($reg=mysqli_fetch_array($res)){
                    echo 'Ingreso de $'.$reg['monto'].' con '.$reg['desc_pago'].' - Fecha '.$reg['fecha'].'';
                    echo ' - ';
                    echo '<a href="eliminar_ingreso.php?cod='.$reg['id_ingreso'].'"><img height="15px" width="15px" src="img/delete.svg" alt="Eliminar"></a>';
                    echo '<br>';
                            }
                        }
                    }
                    
                    ?>
                    <a href="ingresar.php"><button>Ingresar Dinero</button></a>
                    <a href="gastos.php"><button>Cargar Gasto</button></a>
                </div>
                <div>
                    <h3>Cuentas</h3>
                    <?php
                    $sql = "SELECT * FROM cuentas order by fecha_vencimiento";
                    $res = mysqli_query($con,$sql);
                    if(empty($res)){

                    }else{
                        $filas=mysqli_num_rows($res);
                        if($filas>0){
                            while($reg=mysqli_fetch_array($res)){
                                echo 'Deuda de '.$reg['nombre_cuenta'].' de $'.$reg['monto'].' - Fecha de vencimiento: '.$reg['fecha_vencimiento'];
                                echo ' - ';
                                echo '<a href="pagar_cuenta.php?cod='.$reg['id_cuentas'].'&monto='.$reg['monto'].'"><img height="15px" width="15px" src="img/pay.svg" alt="Pagar"></a>';
                                echo ' | ';
                                echo '<a href="eliminar_cuenta.php?cod='.$reg['id_cuentas'].'"><img height="15px" width="15px" src="img/delete.svg" alt="Eliminar"></a>';
                                echo '<br>';
                            }
                        }
                    }
                    mysqli_close($con); 
                    ?>
                    <a href="cargar_cuenta.php"><button>Cargar Cuenta</button></a>
                </div>
            </main>
        </div>
        <div>
            <footer>

            </footer>
        </div>
    </div>
</body>
</html>