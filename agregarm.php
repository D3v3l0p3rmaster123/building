
<HTML> 

    <HEAD>
     
     <TITLE> Registrar Carro </TITLE>
     <meta chrset ="UTF-8">
     <link rel="stylesheet" href="styles.css">
     <script>
     function seleccionUnica(checkbox) {
    var checkboxes = document.getElementsByName(checkbox.name);
    checkboxes.forEach(function(currentCheckbox) {
    if (currentCheckbox !== checkbox) {
      currentCheckbox.checked = false;
    }
    });
    }
    </script>   
    
  
    </HEAD>
    

     <BODY> 
     <?php include("libreria.php") ?>
    

      <form name = "f" action ="agregarmarca.php">
        <h1 align =center>Agregar Marca </h1> 
        <table border =2 align =center>
            <tr align = center> <td align =center><img src ="image.jpeg", width ="200"></td> </tr>
            <tr align = center> <td>Marca: <INPUT TYPE ="text" NAME="MARCA" placeholder="Ingrese la marca deseada"><br>
            <tr align = center> <td><input type="submit" value= "aceptar"    onclick= "javascript:verifica();"><input type="reset" value="limpiar"></td></tr>

          
        </table>
        
            <?php 
            error_reporting (24);
            verifica(); 
            ?>
        <script> <script class="js"></script> 
        </BODY>    
     
 </HTML>