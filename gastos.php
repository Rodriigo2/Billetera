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
                <form action="Guardar_gasto.php" method="POST">
                <h2>Carga de Gasto</h2>
                    <table>
                    <tr><td><label for="monto">Monto</label></td>
                    <td><input type="number" name="monto" id="monto" placeholder="Ingrese monto" required></td></tr>
                    <tr><td><label for="categoria">Categoría</label></td>
                <td><select name="categoria" id="categoria[]"></a>
                    <option value="-1">Seleccionar...</option>
                    <?php
                    include "conexion/conexion.php";

                    $sql = "SELECT * FROM categorias order by id_categoria";
                    $res = mysqli_query($con,$sql);

                    while($reg=mysqli_fetch_array($res)){
                    echo'<option value="'.$reg['id_categoria'].'">'.$reg['descripcion'].'</option>';
                    }
                    
                    ?>
                </select><a href="agregar_categoria.php"><img width="14px" height="13px" src="img/nuevo.svg" alt="Nuevo"></td></tr>
                <tr>
                    <td><label for="medio_pago">Medio de Pago</label></td>
                    <td><select name="medio_pago" id="medio_pago[]">
                        <option value="-1">Seleccione...</option>
                        <?php
                    include "conexion/conexion.php";

                    $sql = "SELECT * FROM medios_pago order by id_medio";
                    $res = mysqli_query($con,$sql);

                    while($reg=mysqli_fetch_array($res)){
                    echo'<option value="'.$reg['id_medio'].'">'.$reg['desc_pago'].'</option>';
                    }                   
                    ?>
                    </select></td>
                </tr>
                <tr><td><label for="motivo">Motivo</label></td>
                <td><textarea name="motivo" id="motivo" cols="30" rows="10" placeholder="motivo..." required></textarea></td></tr>
                    </table>
                    <input type="submit" name="btn-cargar" id="btn-cargar" value="Cargar Gasto">
                </form>
                </div>
                <br>
                <a href="index.php"><button>Volver al Inicio</button></a>
            </main>
            <footer>

            </footer>
    </div>
</div>
</body>
</html>