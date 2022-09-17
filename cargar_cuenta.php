<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar cuenta</title>
</head>
<body>
    <div>
        <div>
            <header><h1>Cargar Cuenta</h1></header>
        </div>
        <div>
            <nav></nav>
        </div>
        <div>
            <main>
                <form action="guardar_cuenta.php" method="post">
                <table>
                    <tr><td><label for="nombre">Nombre de cuenta</label></td>
                <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre de la cuenta" required></td></tr>
                <tr><td><label for="monto">Monto</label></td>
                <td><input type="number" name="monto" id="monto" placeholder="Ingrese el monto" required></td></tr>
                <tr>
                    <td><label for="fecha_vencimiento">Fecha de Vencimiento</label></td>
                    <td><input type="text" name="fecha_vencimiento" id="fecha_vencimiento" placeholder="dd/mm/aaaa" required></td>
                </tr>
                </table>
                <input type="submit" name="btn-guardar" id="btn-guardar" value="Guardar cuenta">
                </form>
            </main>
        </div>
        <div>
            <footer></footer>
        </div>
    </div>
</body>
</html>