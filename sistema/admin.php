<?php

session_start();
if(isset($_SESSION['usuario'])){?>
<?php
$name= $_SESSION['usuario'];

?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilosAdmin.css">
    <script src="../index.js"></script>
    <title>Admin LPCYSC</title>
</head>

<body>
    <h2>Welcome <?php echo "$name";?>  to the page admin of laboratorio</h2>
    <header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="#">Tumaco</a>
                    <ul class="submenus">
                    <a href="#"><li>pre-registro</li></a>
                    <a href="#"><li>Aspirantes</li></a>
                    <a href="#"><li>Monitores</li></a>
                    <a href="#"><li>Miembros</li></a>
                </ul>
                </li>
                <li><a href="#">Cali</a>
                    <ul class="submenus">
                        <a href="#"><li>pre-registro</li></a>
                        <a href="#"><li>Aspirantes</li></a>
                        <a href="#"><li>Monitores</li></a>
                        <a href="#"><li>Miembros</li></a>
                    </ul>
                </li>
                <li><a href="#">Quibdó</a>
                    <ul class="submenus">
                        <a href="#"><li>pre-registro</li></a>
                        <a href="#"><li>Aspirantes</li></a>
                        <a href="#"><li>Monitores</li></a>
                        <a href="#"><li>Miembros</li></a>
                    </ul>
                </li>
                <li><a href="#">General</a>
                    <ul class="submenus">
                        <a href="javascript:abrirPreinscripcionGeneral()"><li>pre-registro</li></a>
                        <a href="#"><li>Aspirantes</li></a>
                        <a href="#"><li>Monitores</li></a>
                        <a href="#"><li>Miembros</li></a>
                    </ul>
                </li>
                <li><a href="#">Editar</a>
                    <ul class="submenus">
                    <form name="formulario" action="../crud/integrante.php"method="post">
                        <input type="text" multiple name="tablaConsulta" id="tablaConsulta" list="drawtConsulta" required size="64">
                            <datalist id="drawtConsulta">
                            <option value="pre_inscripcion"></option>
                            <option value="monitores"></option>
                            <option value="aspirantes"></option>
                            </datalist>
                       <a > <input type="submit" value="EDITAR"></a>
                    </ul>
</form>
                </li>
                <li id="cerrar_session">
                <button><a href="cerrar_session.php">Cerrar Session</a></button>
                </li>
            </ul>
        </nav>
    </header>
    <section class="pre-registro" id="General">
    <?php
	include("../conex.php");

	$link=conectarsebd();

	$var_consulta= "select * from pre_inscripcion";
	$resultado=$link->query($var_consulta);

	?>
<h2>Personas que realizaron la preinscricion</h2>
	<table>
	   <tr>  <!--empezamos  creando las columnas -->
	     <th>|Fecha de inscripcion|</th>
         <th>|Nombres|</th>
	     <th>|Apellidos|</th>
         <th>|Tipo de documento|</th>
         <th>|Numero de documento|</th>
         <th>|Correo|</th>
         <th>|Edad|</th>
         <th>|Sexo|</th>
         <th>|Celular|</th>
	   </tr>
       <!--recorremos las filas-->
	 <?php while ($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><p><?php echo $row["fecha"];     ?></p></td>
            <td><?php echo $row["Nombres"]; 	?></td>
            <td><?php echo $row["Apellidos"];  ?></td>
            <td><?php echo $row["Tipo_documento"];  ?></td>
            <td><?php echo $row["Numero_documento"];  ?></td>
            <td><?php echo $row["Correo"];  ?></td>
            <td><?php echo $row["Edad"];  ?></td>
            <td><?php echo $row["Sexo"];  ?></td>
            <td><?php echo $row["Celular"];  ?></td>
            
          </tr>
         
         <?php } ?>
       </table>
     
    </section>
</body>

</html>




<?php
}else{
    ?>
       <script >
      alert("Error de autenticacion; si no eres admin no lo intentes de nuevo, o atente a las consecuencias legales!...");
    </script>
    
    <?php
    include("login.php");
}





?>

