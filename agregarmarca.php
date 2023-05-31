<HTML>
<BODY>
    <?php 
    error_reporting (5);

    function conectarse()
    {
        if(!($link =mysqli_connect("localhost", "root", ""))){
            echo "error concetando a la base de datos";
            exit ();
        }

        if(!mysqli_select_db($link, "base")){

            echo "error seleccionando la base de datos";
            exit ();
        }
        return $link;
    }
    $link=conectarse();
    $MARCAS= $_REQUEST['MARCA'];
    

    $insertar = "INSERT INTO `MARCAS`(`MARCA`) VALUES ('$MARCAS')";

    mysqli_query($link, $insertar);

    echo "marca ingresada"
   
    ?>
    <BR>
    <a href="marca.php">Volver</a>

</BODY>
</HTML>
