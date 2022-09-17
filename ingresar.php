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
                <form action="guardar_ingreso.php" method="POST">
                <h2>Ingreso de Dinero</h2>
                    <table>
                    <tr><td><label for="monto">Monto</label></td>
                    <td><input type="number" name="monto" id="monto" placeholder="Ingrese monto" required></td></tr>
                    <td><label for="medio_ingreso">Medio de ingreso</label></td>
                    <td><select name="medio_ingreso" id="medio_ingreso[]">
                        <option value="-1">Seleccione...</option>
                        <option value="1">Efectivo</option>
                        <option value="2">Mercado Pago</option>
                    </select></td>
                </tr>
                <tr><td><label for="motivo">Motivo</label></td>
                <td><textarea name="motivo" id="motivo" cols="30" rows="10" placeholder="motivo..."></textarea></td></tr>
                    </table>
                    <input type="submit" name="btn-cargar" id="btn-cargar" value="Cargar Ingreso">
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