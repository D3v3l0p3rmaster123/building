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
    $MARCA= $_REQUEST['MARCA'];
    $MODELO= $_REQUEST['MODELO'];
    $AÑO= $_REQUEST['AÑO'];
    $CC= $_REQUEST['CC'];
    $PRECIO= $_REQUEST['PRECIO'];
    $KILOMETRAJE= $_REQUEST['KILOMETRAJE'];
    $COLOR= $_REQUEST['COLOR'];
    $TRANSMISION= $_REQUEST['TRANSMISION'];
    $TIPOCOMBUSTION= $_REQUEST['TIPOCOMBUSTION'];
    $TIPOCARRO= $_REQUEST['TIPOCARRO'];
    $TIPOTRANS= $_REQUEST['TIPOTRANS'];
    $ESTADO= $_REQUEST['ESTADO'];
   

    $insertar = "INSERT INTO `dataset_1` (`MARCA`, `MODELO`, `AÑO`, `CC`, `PRECIO`, `KILOMETRAJE`, `COLOR`, `TRANSMISION`, `TIPOCOMBUSTION`, `TIPOCARRO`, `TIPOTRANS`, `ESTADO`) VALUES ('$MARCA', '$MODELO' , '$AÑO' , '$CC' , '$PRECIO' , '$KILOMETRAJE' , '$COLOR', '$TRANSMISION' , '$TIPOCOMBUSTION' , '$TIPOCARRO' , '$TIPOTRANS' , '$ESTADO'  )";

    mysqli_query($link, $insertar);

    echo "usuario ingresado"
   
    ?>
    <BR>
    <a href="index.php">Volver</a>

</BODY>
</HTML>
