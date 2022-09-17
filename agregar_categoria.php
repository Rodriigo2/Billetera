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
                <form action="guardar_categoria.php" method="POST">
                <h2>Añadir Categoría</h2>
                    <table>
                        <tr><td><label for="nombre">Nombre Categoría</label></td>
                        <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese Categoría" required></td>
                    <td><input type="submit" name="btn-cargar" id="btn-cargar" value="Añadir Categoria"></td></tr>
                    </table>
                </form>
                </div>
                <br>
                <a href="gastos.php"><button>Volver a gastos</button></a>
            </main>
            <footer>

            </footer>
    </div>
</div>
</body>
</html>