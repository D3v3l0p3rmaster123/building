
<HTML> 

    <HEAD>
     
     <TITLE> Registrar Carro </TITLE>
     <meta chrset ="UTF-8">
     <link rel="stylesheet" href="styles.css">
     <a href="index.php"> volver </a>  
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
    

      <form name = "f" action ="insertar.php">
        <h1 align =center>Agregar un Carro </h1> 
        <table border =2 align =center>
            <tr align = center> <td align =center><img src ="image.jpeg", width ="200"></td> </tr>
            <tr align = center> <td>Marca: 
            <select NAME = "MARCA" >
                <option value=""></option>
                <option value="BMW">BMW</option>
                <option value="Mercedes Benz">Mercedes Benz</option>
                <option value="Mazda">Mazda</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Land Rover">Land Rover</option>
                <option value="Nissan">Nissan</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Mazda">Mazda</option>
            </select>
            </td>
            <tr align = center> <td>Referencia: <INPUT TYPE ="text" NAME="MODELO"><br>
            <tr align = center> <td>Modelo: <INPUT TYPE ="number" NAME="AÑO"><br>
            <tr align = center> <td>Motor: <INPUT TYPE ="text" NAME="CC"><br>
            <tr align = center> <td>Precio: <INPUT TYPE ="text" NAME="PRECIO"><br>
            <tr align = center> <td>Kilometraje: <INPUT TYPE ="number" NAME="KILOMETRAJE"><br>
            <tr align = center> <td>Color: <INPUT TYPE ="text" NAME="COLOR"><br>
            <tr align = center> <td>Transmision:  
            <select NAME = "TRANSMISION">
                <option value=""></option>
                <option value="Mecanica">Mecanica</option>
                <option value="Automatica">Automatica</option>
                <option value="Electrica">Electrica</option>
            </select>
            </td>

            <tr align = center> <td>Tipo de combustion:
            <select NAME = "TIPOCOMBUSTION">
                <option value=""></option>
                <option value="Gasolina">Gasolina</option>
                <option value="Diesel">Diesel</option>
                <option value="N/A">N/A</option>
            </select>
            </td>
            <tr align = center> <td>Tipo de carroceria: <INPUT TYPE ="text" NAME="TIPOCARRO"><br>
            <tr align = center> <td>Tipo transmision<INPUT TYPE ="text" NAME="TIPOTRANS"><br>
            <tr align = center> <td>Estado: 
            <br>
            <label>
            <INPUT TYPE ="checkbox" NAME="ESTADO" value = "reservado" onchange="seleccionUnica(this)">
            reservado
            <INPUT TYPE ="checkbox" NAME="ESTADO" value = "en consignacion" onchange="seleccionUnica(this)">
            en consignacion
            <INPUT TYPE ="checkbox" NAME="ESTADO" value = "disponible" onchange="seleccionUnica(this)">
            disponible
            </label>
            <INPUT TYPE ="checkbox" NAME="ESTADO" value = "taller" onchange="seleccionUnica(this)">
            taller
            </label>
          
            </td>
            <tr align = center> <td><input type="submit" value= "aceptar"    onclick= "javascript:verifica();"><input type="reset" value="limpiar"></td></tr>
            <tr align = center> <td> <a href="mostrar.php"> listar usuarios </a> </td> </tr>
            <tr align = center> <td> <a href="agregarm.php"> agregar marca </a> </td> </tr>
            <?php 
            error_reporting (24);
            verifica(); 
            ?>
        <script> <script class="js"></script> 
        </BODY>    
     
 </HTML>