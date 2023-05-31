

<html>
<head>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<a href="marca.php"> volver </a>  
    <div>
        <form method="POST" action="" onsubmit="return validateForm()">
        <input type="checkbox" name="marca[]" value="Mercedes"> Mercedes<br>
            <input type="checkbox" name="marca[]" value="Nissan"> Nissan<br>
            <input type="checkbox" name="marca[]" value="Land Rover"> Land Rover<br>
            <input type="checkbox" name="marca[]" value="Ford"> Ford<br>
            <input type="checkbox" name="marca[]" value="Mazda"> Mazda<br>
            <input type="checkbox" name="marca[]" value="Volkswagen"> Volkswagen<br>
            <input type="checkbox" name="marca[]" value="Chevrolet"> Chevrolet<br>
            <input type="submit" value="Filtrar">
            <input type="submit" value="quitar filtros">
        </form>

        <?php
        $conex = mysqli_connect("localhost", "root", "", "base");

        if ($conex) {
            $marcaFilter = ""; 

            
            if (isset($_POST['marca'])) {
                $selectedMarca = $_POST['marca'];

                
                $marcaFilter = "MARCA IN ('" . implode("','", $selectedMarca) . "') AND ";
            }

            $consulta = "SELECT * FROM dataset_1 WHERE $marcaFilter 1";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                ?>
                <table border="2" align="center">
                 
                <tr>
                        <td>ID</td>
                        <td>MARCA</td>
                        <td>MODELO</td>
                        <td>AÑO</td>
                        <td>CC</td>
                        <td>PRECIO</td>
                        <td>KILOMETRAJE</td>
                        <td>COLOR</td>
                        <td>TRANSMISION</td>
                        <td>TIPOCOMBUSTION</td>
                        <td>TIPOCARRO</td>
                        <td>TIPOTRANS</td>
                        <td>ESTADO</td>
                    </tr>
                    <?php while ($row = $resultado->fetch_array()) { ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['MARCA']; ?></td>
                            <td><?php echo $row['MODELO']; ?></td>
                            <td><?php echo $row['AÑO']; ?></td>
                            <td><?php echo $row['CC']; ?></td>
                            <td><?php echo $row['PRECIO']; ?></td>
                            <td><?php echo $row['KILOMETRAJE']; ?></td>
                            <td><?php echo $row['COLOR']; ?></td>
                            <td><?php echo $row['TRANSMISION']; ?></td>
                            <td><?php echo $row['TIPOCOMBUSTION']; ?></td>
                            <td><?php echo $row['TIPOCARRO']; ?></td>
                            <td><?php echo $row['TIPOTRANS']; ?></td>
                            <td><?php echo $row['ESTADO']; ?></td>
                        </tr>
                        
                    <?php } ?>
                </table>
            <?php } else {
                echo 'No se conectó a la base de datos';
            }
        }
        ?>
      
        <script>
            function validateForm() {
                var checkboxes = document.getElementsByName("marca[]");
                var checked = false;

                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {
                        checked = true;
                        break;
                    }
                }

                if (!checked) {
                    alert(no pueden estar vacios");
                    return false;
                }

                return true;
            }
        </script>
    </div>
</body>
</html>
