<html>
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <script>
        function verifica() {
            var correo = document.getElementsByName("correo")[0].value;
            var contraseña = document.getElementsByName("contra")[0].value;

          
            if (!correo.includes('@') || !correo.includes('.')) {
                alert("El campo de Correo Electrónico debe tener un formato válido");
                return false;
            }

            if (!contraseña.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/)) {
                alert("El campo Contraseña debe tener al menos una mayúscula, una minúscula y un número");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <form name="f" action="marca.php" method="POST">
        <h1 align="center">Inicio de sesión</h1>
        <table border="2" align="center">
            <tr align="center"> <td align="center"><img src="login.png" width="200"></td></tr>
            <tr align="center"> <td>Correo Electrónico: <input type="text" name="correo"></td> </tr>
            <tr align="center"><td>Contraseña: <input type="password" name="contra"></td> </tr>
            <tr align="center"> <td><input type="submit" value="Ingresar" onclick="return verifica();"></td> </tr>
            <tr align="center"> <td><input type="submit" value="limpiar" ></td> </tr>
 </table>
 </form>
</body>
</html>
