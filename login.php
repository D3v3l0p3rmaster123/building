
<!DOCTYPE html>
<html>
<head>
    <title>Registrar Carro</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <script>
        function verifica() {
            var correo = document.getElementsByName("correo")[0].value;
            var contraseña = document.getElementsByName("contraseña")[0].value;

            if (correo === "" || contraseña === "") {
                alert("Por favor, completa todos los campos");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <?php include("libreria.php") ?>

    <form name="f" action="insertar.php" method="POST">
        <h1 align="center">Agregar un Carro</h1>
        <table border="2" align="center">
            <tr align="center">
                <td align="center"><img src="image.jpeg" width="200"></td>
            </tr>
            <tr align="center">
                <td>Correo: <input type="text" name="correo"></td>
            </tr>
            <tr align="center">
                <td>Contraseña: <input type="password" name="contraseña"></td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Aceptar" onclick="return verifica();">
                    <input type="reset" value="Limpiar">
                </td>
            </tr>
            <tr align="center">
                <td><a href="mostrar.php">Listar usuarios</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
